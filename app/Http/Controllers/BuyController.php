<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Handle the incoming request.
     */
        public function __invoke ($mo , $se , $ty , $hop) {

            

                if ($mo == "Bmw"){

                            return 'MODEL: '  .  $mo. '<br> <br> SERIES: ' .$se . '<br> <br> TYPE: ' . $ty . '<br> <br> HORSEPOWER: ' . $hop . ' <br> <br> <a href="https://www.bmw.com/en/index.html"><button>CLICK TO BUY THIS PRODUCT </button></a>';
                        
                } else if ($mo == "Mercedes"){

                    return 'MODEL: '  .  $mo. '<br> <br> SERIES: ' .$se . '<br> <br> TYPE: ' . $ty . '<br> <br> HORSEPOWER: ' . $hop . ' <br> <br> <a href="https://www.mercedes-benz.com.tr/?group=all&subgroup=see-all&view=BODYTYPE"><button>CLICK TO BUY THIS PRODUCT </button></a>';

                } else if ($mo == "Audi") {
                
                    return 'MODEL: '  .  $mo. '<br> <br> SERIES: ' .$se . '<br> <br> TYPE: ' . $ty . '<br> <br> HORSEPOWER: ' . $hop . ' <br> <br> <a href="https://www.audi.com.tr/tr/web/tr.html"><button>CLICK TO BUY THIS PRODUCT </button></a>';
                };
        
            
    }
}
