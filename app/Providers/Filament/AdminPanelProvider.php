<?php

namespace App\Providers\Filament;

use App\Filament\Resources\LayananResource;
use App\Filament\Resources\PesananResource;
use App\Filament\Resources\PesananResource\Widgets\PesananBulananStat;
use App\Filament\Resources\PesananResource\Widgets\PesananMingguanStat;
use App\Filament\Resources\PesananResource\Widgets\PesananStat;
use App\Filament\Resources\StatusPembayaranResource;
use App\Filament\Resources\StatusPesananResource;
use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->brandName('Laundry')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                PesananStat::class,
                PesananMingguanStat::class,
                PesananBulananStat::class,
            ])
            ->spa()
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.dashboard'))
                        ->url(fn (): string => Dashboard::getUrl()),
                ])
                ->groups(groups: [
                    NavigationGroup::make('Manajemen Pesanan')
                    ->items([
                        ...PesananResource::getNavigationItems(),
                    ]),
                    NavigationGroup::make('Manajemen Status')
                    ->items([
                        ...StatusPesananResource::getNavigationItems(),
                        ...StatusPembayaranResource::getNavigationItems(),
                    ]),
                    NavigationGroup::make('Manajemen Layanan')
                    ->items([
                        ...LayananResource::getNavigationItems(),
                    ]),
                ]);
            })
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
