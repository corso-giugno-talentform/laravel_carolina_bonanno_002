<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $articles = [
        [
            'id' => 1,
            'slug' => 'la-moda-si-fa-lenta',
            'img' => '/images/fashion.webp',
            'alt' => 'Influencer alla Copenhagen Fashion Week',
            'title' => 'La moda si fa lenta: la prima Fashion Week completamente sostenibile debutta a Copenhagen',
            'description' => 'Rivoluzione green nel cuore dell’alta moda: solo brand etici in passerella. Il futuro del fashion è (finalmente) responsabile.',
            'paragraph' => 'Per la prima volta nella storia, la Copenhagen Fashion Week ha eliminato del tutto brand non sostenibili dal calendario ufficiale. Tutti i marchi partecipanti hanno dovuto soddisfare rigorosi criteri ambientali e sociali, segnando un momento epocale per l’industria. La settimana della moda diventa così anche un manifesto per il futuro del fashion responsabile.',
            'author' => 'ChatGpt',
            'category' => 'Sostenibilità',
        ],
        [
            'id' => 2,
            'slug' => 'il-ritorno-degli-anni-2000',
            'img' => '/images/z.webp',
            'alt' => 'Modella vestita in abiti Y2K',
            'title' => 'Il ritorno degli anni 2000? Ecco perché la Gen Z dice sì a glitter, jeans a vita bassa e mini-borse',
            'description' => 'I trend Y2K tornano protagonisti tra nostalgia e nuove interpretazioni. La Gen Z detta le regole del revival più pop dell’anno.',
            'paragraph' => 'La nostalgia è protagonista nelle ultime collezioni streetwear e nei feed di TikTok: il Y2K style torna in auge, reinterpretato con ironia e consapevolezza. Dai top a farfalla ai cargo oversize, la Gen Z ripesca trend iconici e li trasforma in nuovi statement di stile.',
            'author' => 'ChatGpt',
            'category' => 'Trend',
        ],
        [
            'id' => 3,
            'slug' => 'intelligenza-artificiale-e-moda',
            'img' => '/images/ai.webp',
            'alt' => 'Robot dalle afttezze umane',
            'title' => 'Intelligenza Artificiale e moda: nasce il primo stilista virtuale con collezione su misura',
            'description' => 'Dall’algoritmo alla passerella: EVA è l’AI-stylist che crea abiti personalizzati in tempo reale. La moda diventa tech e su misura.',
            'paragraph' => 'Il brand emergente SYNTH ha lanciato “EVA”, uno stilista alimentato da AI capace di creare capi personalizzati analizzando gusti, proporzioni corporee e stile di vita del cliente. La prima capsule collection ha registrato sold-out in 48 ore, aprendo una nuova frontiera nella personalizzazione fashion-tech.',
            'author' => 'ChatGpt',
            'category' => 'News',
        ]
    ];

    public function homepage()
    {
        return view('welcome', ['articles' => self::$articles]);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function article($article)
    {
        foreach (self::$articles as $element) {
            if ($element['slug'] == $article) {
                return view('article', ['article' => $element]);
            }
        }
        abort(404);
    }

    public function send(Request $request)
    {
        $data = [
            'id_product' => $request->id_product,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'message' => $request->message,
        ];

        dd($data);
    }
}
