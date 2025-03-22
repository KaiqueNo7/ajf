<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Response;

class SitemapController
{
    public function index()
    {
        $urls = [
            [
                'loc' => url('/'),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
        ];

        $properties = Property::select('name', 'updated_at')->get();
        
        foreach ($properties as $property) {
            $urls[] = [
                'loc' => url($property->url),
                'lastmod' => $property->updated_at->toDateString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ];
        }

        // Gerar XML
        $xml = view('sitemap', compact('urls'));

        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
