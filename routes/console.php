<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command( 're-init', function() {
    $this->info( 'Wiping database...' );
    Artisan::call( 'db:wipe' );
    $this->info( 'Database wiped!' );
    $this->info( 'Running migrations...' );
    Artisan::call( 'migrate:refresh' );
    $this->info( 'Finished!' );
    $this->info( 'Seeding Database...' );
    Artisan::call( 'db:seed' );
    $this->info( 'Done!' );
    $this->info( 'Linking storage...' );
    Artisan::call( 'storage:link' );
    $this->info( 'Enjoy!' );
});

Artisan::command( 're-build', function() {
    $this->info( 'Rebuilding schema...' );
    Artisan::call( 'blueprint:erase' );
    Artisan::call( 'blueprint:build' );
    $this->info( 'Done!' );
});