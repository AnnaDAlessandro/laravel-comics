<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
    
    $menuLinks=[
        [
            'name' =>'CHARACTERS',
            'current'=>false
        ],
        [
             'name'=>'COMICS',
             'current'=>true
        ],
        [
            'name'=>'MOVIES',
            'current'=>false
        ],
        [ 
            'name'=>'TV',
            'current'=>false
        ],
        [
            'name'=>'GAMES',
            'current'=>false
        ],
        [
            'name'=>'COLLECTIBLES',
            'current'=>false
        ],
        [
            'name'=>'VIDEOS',
            'current'=>false
        ],
        [
            'name'=>'FANS',
            'current'=>false
        ],
        [
            'name'=>'NEWS',
            'current'=>false
        ],
        [ 
            'name'=>'SHOP',
            'current'=>false
        ]
              
        ];

        $comics= config('comics');

        $menuItem=[
            [ 
                'name'=>"DIGITAL COMICS",
                'image'=>"buy-comics-digital-comics.png"
            ],
            [ 
                'name'=>"DC MERCHANDISE",
                'image'=>"buy-comics-merchandise.png"
            ],
            [ 
                'name'=>"SUBSCRIPTIONS",
                'image'=>"buy-comics-subscriptions.png"
            ],
             [ 
                'name'=>"COMICS SHOP LOCATOR",
                'image'=>"buy-comics-shop-locator.png"

            ],
            [ 
                'name'=>"DC POWER VISA",
                'image'=>"buy-dc-power-visa.svg"
            ]
            ];


            $menuLinkFooterDcComincs=[
                [ 
                    'name'=>'Characters',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Comics',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Movies',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'TV',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Games',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Videos',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'News',
                    'link'=>'#'
                ]
                ];
            $menuLinkFooterShop=[
                [ 
                    'name'=>'Shop DC',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Shop DC Collectibles',
                    'link'=>'#'
                ]
                ];
             $menuLinkFooterDc=[
                [ 
                    'name'=>'Terms of use',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Privacy policy (New)',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Ad Choices',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Advertising ',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Jobs',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Subscriptions',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Talent Workshops',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'CPSC Certificates',
                    'link'=>'#'
                ],
                [ 
                    'name'=> 'Ratings',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Shop help',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'Contact Us',
                    'link'=>'#'
                ]
               
                ];
             $menuLinkFooterSites=[
                [ 
                    'name'=>'DC',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'MAD Magazine',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'DC Kids',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'DC Universe',
                    'link'=>'#'
                ],
                [ 
                    'name'=>'DC Power Visa',
                    'link'=>'#'
                ]
    
                ];
            
            $menuImageFooter=[
                [  
                    'name'=>"",
                    'image'=>"footer-facebook.png"
                ],
                [  
                    'name'=>"",
                    'image'=>"footer-periscope.png"
                ],
                [  
                    'name'=>"",
                    'image'=>"footer-pinterest.png"
                ],
                 [  
                    'name'=>"",
                    'image'=>"footer-twitter.png"
    
                ],
                [  
                    'name'=>"",
                    'image'=>"footer-youtube.png"
                ]
                ];

    return view('pages.welcome', compact('menuLinks','comics','menuItem','menuImageFooter','menuLinkFooterSites','menuLinkFooterDc','menuLinkFooterShop','menuLinkFooterDcComincs'));
    })-> name('homepage');
