<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioPageBannerResource\Pages;
use App\Filament\Resources\PortfolioPageBannerResource\RelationManagers;
use App\Models\PortfolioBanner;
use App\Models\PortfolioPageBanner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioPageBannerResource extends Resource
{
    protected static ?string $model = PortfolioBanner::class;

    protected static ?string $navigationGroup = 'Banners';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Portfolio Page Image')
            ->description('Add your Portfolio page banner image and title here.')
            ->schema([
                TextInput::make('title')
                ->live(onBlur:true)
                ->afterStateUpdated(function ($state, Forms\Set $set) {
                    $set('alt_text', $state);
                })
                ->minLength(1)->maxLength(150)
                ->required(),
                TextInput::make('alt_text')->minLength(1)->maxLength(150),
                FileUpload::make('image')
                ->name('Banner Image')
                ->image()
                ->preserveFilenames()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('2.54:1')
                ->imageResizeTargetWidth('1440')
                ->imageResizeTargetHeight('568')                    
                ->directory('images/hero')
                ->acceptedFileTypes(['image/webp']) // Ensures only WebP images are accepted
                ->maxSize(3072)  
                ->directory('public')
                ->storeFileNamesIn('original_filenames')              
                ->columnSpanFull()          
                ->required(),
                Textarea::make('description')
                ->rows(5)
                ->cols(20)
                ->minLength(10)
                ->maxLength(250)
                ->columnSpanFull()          
                ->required(),
                Toggle::make('is_featured')
                ->label('Set as the Portfolio page banner')
                ->afterStateUpdated(function (string $state, callable $set, $get) {
                    if ($state) {
                        // Automatically unset other featured banners
                        PortfolioBanner::where('is_featured', true)
                            ->where('id', '!=', $get('id')) // Exclude current record
                            ->update(['is_featured' => false]);
                    }
                })
                ->columnSpanFull()          
                ->required(),        
            ])->columnSpan(1)->columns(2)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->disk('public'),            
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('is_featured')
                ->label('Status')
                ->formatStateUsing(fn($state) => $state ? 'Featured' : 'Not Featured')
                ->badge()
                ->colors([
                    'success' => fn($state) => $state,   // Green badge for Featured
                    'secondary' => fn($state) => !$state, // Gray badge for Not Featured
                ]),            
                TextColumn::make('created_at')
                ->dateTime('Y-M-d')
                ->sortable()
                ->searchable(),
                TextColumn::make('updated_at')
                ->dateTime('Y-M-d')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolioPageBanners::route('/'),
            'create' => Pages\CreatePortfolioPageBanner::route('/create'),
            'edit' => Pages\EditPortfolioPageBanner::route('/{record}/edit'),
        ];
    }
}
