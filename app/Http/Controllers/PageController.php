<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $seo = [
            'title' => 'Mercia Mimarlık - Modern ve Yenilikçi Mimari Tasarımlar',
            'description' => 'İstanbul\'da modern mimari tasarım ve iç mimarlık hizmetleri. Konut, ofis, ticari yapılar ve renovasyon projeleri için profesyonel mimarlık çözümleri.',
            'keywords' => 'mimarlık, iç mimarlık, mimari tasarım, ofis tasarımı, konut projesi, ticari mimari, istanbul mimar'
        ];

        return view('pages.home', compact('seo'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function projects()
    {
        $projects = Project::where('is_active', true)
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get();

        $seo = [
            'title' => 'Projelerimiz - Mercia Mimarlık',
            'description' => 'Konut, ofis, ticari yapılar ve renovasyon projelerimizi inceleyin. Modern ve fonksiyonel mimari tasarımlarımızla tanışın.',
            'keywords' => 'mimari projeler, tamamlanan projeler, konut projeleri, ofis projeleri, ticari projeler'
        ];

        return view('pages.projects', compact('projects', 'seo'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:20',
                'message' => 'required|min:10'
            ]);

            // Veritabanına kaydet
            $contact = Contact::create($validated);

            // Email gönder
            Mail::raw(
                "Yeni İletişim Mesajı\n\n" .
                "Gönderen: {$contact->name}\n" .
                "Email: {$contact->email}\n" .
                "Telefon: {$contact->phone}\n\n" .
                "Mesaj:\n{$contact->message}",
                function($message) use ($contact) {
                    $message->to('iso.reus@gmail.com')
                            ->subject('Yeni İletişim Formu Mesajı - ' . $contact->name);
                    $message->from('iso.reus@gmail.com', 'Mercia Mimarlık');
                }
            );

            return back()->with('success', 'Mesajınız başarıyla gönderildi!');
        } catch (\Exception $e) {
            \Log::error('Mail gönderme hatası: ' . $e->getMessage());
            return back()->with('error', 'Mesaj gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.');
        }
    }

    public function projectDetails(Project $project)
    {
        if (!$project->is_active) {
            abort(404);
        }

        // Proje görsellerini düzenle
        $project->gallery_images = array_map(function($image) {
            return asset('assets/img/gallery/' . $image);
        }, $project->images ?? []);

        return view('pages.project-details', compact('project'));
    }
}
