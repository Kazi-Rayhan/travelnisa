<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.settings';

    public $site_name;
    public $site_logo;
    public $site_favicon;
    public $site_description;
    public $site_address;
    public $phone;
    public $email;
    public $facebook_link;
    public $instagram_link;
    public $twitter_link;
    public $youtube_link;

    public function mount(): void
    {
        $settings = Setting::first();

        if ($settings) {
            // Ensure you're getting these as string values
            $this->site_name = $settings->site_name ?? '';
            $this->site_logo = $settings->site_logo ?? ''; // Expect this to be a string (file path)
            $this->site_favicon = $settings->site_favicon ?? ''; // Expect this to be a string (file path)
            $this->site_description = $settings->site_description ?? '';
            $this->site_address = $settings->site_address ?? '';
            $this->phone = $settings->phone ?? '';
            $this->email = $settings->email ?? '';
            $this->facebook_link = $settings->facebook_link ?? '';
            $this->instagram_link = $settings->instagram_link ?? '';
            $this->twitter_link = $settings->twitter_link ?? '';
            $this->youtube_link = $settings->youtube_link ?? '';
        } else {
            // Initialize default values if no settings exist
            $this->initializeDefaultSettings();
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')->required(),
                FileUpload::make('site_logo')
                    ->image()
                    ->nullable()
                    ->preserveFilenames(),
                FileUpload::make('site_favicon')
                    ->image()
                    ->nullable()
                    ->preserveFilenames(),
                Textarea::make('site_description')->nullable(),
                Textarea::make('site_address')->nullable(),
                TextInput::make('phone')->nullable(),
                TextInput::make('email')->email()->nullable(),
                TextInput::make('facebook_link')->url()->nullable(),
                TextInput::make('instagram_link')->url()->nullable(),
                TextInput::make('twitter_link')->url()->nullable(),
                TextInput::make('youtube_link')->url()->nullable(),
            ]);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        // Validate input data before saving
        $validatedData = $this->validate([
            'site_name' => 'required|string|max:255',
            'site_logo' => 'nullable|max:1024',
            'site_favicon' => 'nullable|max:512',
            'site_description' => 'nullable|string',
            'site_address' => 'nullable|string',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',
        ]);

        try {
            $settings = Setting::first();

            if ($settings) {
                // Handle file uploads
                if (isset($validatedData['site_logo'])) {
                    // Store the uploaded file in storage and get the path
                    $validatedData['site_logo'] = $validatedData['site_logo']->store('logos', 'local');
                }

                if (isset($validatedData['site_favicon'])) {
                    // Store the uploaded file in storage and get the path
                    $validatedData['site_favicon'] = $validatedData['site_favicon']->store('favicons', 'local');
                }

                $settings->update($validatedData);
            } else {
                Setting::create($validatedData);
            }

            Notification::make()
                ->success()
                ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                ->send();

        } catch (Halt $exception) {
            return;
        }
    }

    protected function initializeDefaultSettings(): void
    {
        // Initialize default values for settings
        $this->site_name = '';
        $this->site_logo = null;
        $this->site_favicon = null;
        $this->site_description = '';
        $this->site_address = '';
        $this->phone = '';
        $this->email = '';
        $this->facebook_link = '';
        $this->instagram_link = '';
        $this->twitter_link = '';
        $this->youtube_link = '';
    }
}
