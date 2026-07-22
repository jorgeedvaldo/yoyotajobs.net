<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationLabel = 'Jobs';

    protected static ?string $navigationGroup = 'JOBS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\TextInput::make('company')->required(),
                        Forms\Components\TextInput::make('province')->required(),
                        Forms\Components\RichEditor::make('description')
							->required()
							->default('<p><br></p><h2>-------------</h2><h2>YoyotaJobs - Aqui encontra o seu emprego ideal na Europa.</h2><p>Encontre aqui as melhores vagas de emprego em Portugal, Espanha, França e resto da Europa, com oportunidades de recrutamento disponíveis no nosso portal para candidaturas.<br /><strong>Tags:</strong>&nbsp;YoyotaJobs, emprego em Portugal, emprego em Espanha, emprego em França, emprego na Europa, recrutamento, vagas de emprego, ofertas de emprego</p><h2>Não recrutamos ninguém, a nossa missão é reunir e divulgar vagas de emprego publicadas por empresas e fontes credíveis.</h2>'),
                        Forms\Components\TextInput::make('email_or_link')->required(),
                        Forms\Components\FileUpload::make('photo')
                            ->directory('images/jobs')
                            ->image()
                            ->required()
							->default('images/jobs/default.jpg'), 

                        Forms\Components\MultiSelect::make('categories')
                            ->relationship('categories','name'),
                    ])  
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('country.name')->sortable(),
                Tables\Columns\TextColumn::make('company'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }    
}
