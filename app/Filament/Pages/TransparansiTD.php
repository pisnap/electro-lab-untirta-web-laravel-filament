<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class TransparansiTD extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.transparansi-td';

    protected static ?string $navigationLabel = 'Transparansi';

    protected static ?string $title = 'Transparansi Nilai';

    protected static ?string $slug = 'transparansi-teknik-digital';

    public $users;

    public function mount()
    {
        // Ambil data pengguna dan relasi teknikdigital
        $this->users = User::with('teknikdigital')->get();
    }
}
