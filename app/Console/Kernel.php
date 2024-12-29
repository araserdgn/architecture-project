protected function schedule(Schedule $schedule)
{
    // Her gün gece yarısı sitemap'i güncelle
    $schedule->command('sitemap:generate')->daily();
}
