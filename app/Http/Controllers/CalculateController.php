<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function getInfo(Request $request)
    {
        $info = $request->all();
        $count1Q1 = 0;
        $count1Q2 = 0;
        $count1Q3 = 0;
        $count2Q1 = 0;
        $count2Q2 = 0;
        $count2Q3 = 0;
        $count3Q1 = 0;
        $count3Q2 = 0;
        $count3Q3 = 0;
        $sanguine1 = 0;
        $sanguine2 = 0;
        $sanguine3 = 0;
        $choleric1 = 0;
        $choleric2 = 0;
        $choleric3 = 0;
        $melancholic1 = 0;
        $melancholic2 = 0;
        $melancholic3 = 0;
        $phlegmatic1 = 0;
        $phlegmatic2 = 0;
        $phlegmatic3 = 0;
        define('PERCENT_5', 5);
        define('A1', 'answer1');
        define('A2', 'answer2');
        define('A3', 'answer3');
        define('A2_1', 'answer2_1');
        define('A2_2', 'answer2_2');
        for ($i = 1; $i <= count($info); $i++) {
            if ($i <= 11) {
                if ($info['question' . $i] == A1) {
                    $count1Q1++;
                }
                if ($info['question' . $i] == A2) {
                    $count1Q2++;
                }
                if ($info['question' . $i] == A3) {
                    $count1Q3++;
                }
            } else {
                if ($i == 22) {
                    if ($info['question' . $i] == A1) {
                        $count2Q1++;
                    }
                    if ($info['question' . $i] == A2_1 || $info['question' . $i] == A2_2) {
                        $count2Q2++;
                    }
                    if ($info['question' . $i] == A3) {
                        $count2Q3++;
                    }
                } else {
                    if ($info['question' . $i] == A1) {
                        $count2Q1++;
                    }
                    if ($info['question' . $i] == A2) {
                        $count2Q2++;
                    }
                    if ($info['question' . $i] == A3) {
                        $count2Q3++;
                    }
                }
            }
        }

        $count3Q1 = round(($count1Q1 + $count2Q1) / 2);
        $count3Q2 = round(($count1Q2 + $count2Q2) / 2);
        $count3Q3 = round(($count1Q3 + $count2Q3) / 2);
        if (($count3Q1 + $count3Q2 + $count3Q3) != 11){
            if($count3Q1 >= $count3Q2 && $count3Q1 >= $count3Q3){
                $count3Q1 = floor(($count1Q1 + $count2Q1) / 2);
                $count3Q2 = round(($count1Q2 + $count2Q2) / 2);
                $count3Q3 = round(($count1Q3 + $count2Q3) / 2);
            }elseif($count3Q2 >= $count3Q1 && $count3Q2 >= $count3Q3){
                $count3Q1 = round(($count1Q1 + $count2Q1) / 2);
                $count3Q2 = floor(($count1Q2 + $count2Q2) / 2);
                $count3Q3 = round(($count1Q3 + $count2Q3) / 2);
            }
            elseif($count3Q3 >= $count3Q1 && $count3Q3 >= $count3Q2){
                $count3Q1 = round(($count1Q1 + $count2Q1) / 2);
                $count3Q2 = round(($count1Q2 + $count2Q2) / 2);
                $count3Q3 = floor(($count1Q3 + $count2Q3) / 2);
            }
        }

        $type1 = '';
        if (($count1Q1 == 11 && $count1Q2 == 0 && $count1Q3 == 0) ||
            ($count1Q1 == 10 && (($count1Q2 == 1 && $count1Q3 == 0) || ($count1Q2 == 0 && $count1Q3 == 1))) ||
            ($count1Q1 == 9 && (($count1Q2 == 2 && $count1Q3 == 0) || ($count1Q2 == 1 && $count1Q3 == 1) || ($count1Q2 == 0 && $count1Q3 == 2))) ||
            ($count1Q1 == 8 && (($count1Q2 == 3 && $count1Q3 == 0) || ($count1Q2 == 2 && $count1Q3 == 1) || ($count1Q2 == 1 && $count1Q3 == 2) || ($count1Q2 == 0 && $count1Q3 == 3))) ||
            ($count1Q1 == 7 && $count1Q2 == 2 && $count1Q3 == 2) ||
            ($count1Q1 == 5 && $count1Q2 == 3 && $count1Q3 == 3)
        ) {
            $type1 = 'V';
        } elseif (($count1Q2 == 11 && $count1Q1 == 0 && $count1Q3 == 0) ||
            ($count1Q2 == 10 && (($count1Q1 == 1 && $count1Q3 == 0) || ($count1Q1 == 0 && $count1Q3 == 1))) ||
            ($count1Q2 == 9 && (($count1Q1 == 2 && $count1Q3 == 0) || ($count1Q1 == 1 && $count1Q3 == 1) || ($count1Q1 == 0 && $count1Q3 == 2))) ||
            ($count1Q2 == 8 && (($count1Q1 == 3 && $count1Q3 == 0) || ($count1Q1 == 2 && $count1Q3 == 1) || ($count1Q1 == 1 && $count1Q3 == 2) || ($count1Q1 == 0 && $count1Q3 == 3))) ||
            ($count1Q2 == 7 && $count1Q1 == 2 && $count1Q3 == 2) ||
            ($count1Q2 == 5 && $count1Q1 == 3 && $count1Q3 == 3)
        ) {
            $type1 = 'P';
        } elseif
        (($count1Q3 == 11 && $count1Q1 == 0 && $count1Q2 == 0) ||
            ($count1Q3 == 10 && (($count1Q1 == 1 && $count1Q2 == 0) || ($count1Q1 == 0 && $count1Q2 == 1))) ||
            ($count1Q3 == 9 && (($count1Q1 == 2 && $count1Q2 == 0) || ($count1Q1 == 1 && $count1Q2 == 1) || ($count1Q1 == 0 && $count1Q2 == 2))) ||
            ($count1Q3 == 8 && (($count1Q1 == 3 && $count1Q2 == 0) || ($count1Q1 == 2 && $count1Q2 == 1) || ($count1Q1 == 1 && $count1Q2 == 2) || ($count1Q1 == 0 && $count1Q2 == 3))) ||
            ($count1Q3 == 7 && $count1Q1 == 2 && $count1Q2 == 2) ||
            ($count1Q3 == 5 && $count1Q1 == 3 && $count1Q2 == 3)
        ) {
            $type1 = 'K';
        } elseif
        (($count1Q1 == 7 && (($count1Q2 == 4 && $count1Q3 == 0) || ($count1Q2 == 3 && $count1Q3 == 1))) ||
            ($count1Q1 == 6 && (($count1Q2 == 5 && $count1Q3 == 0) || ($count1Q2 == 4 && $count1Q3 == 1) || ($count1Q2 == 3 && $count1Q3 == 2))) ||
            ($count1Q1 == 5 && $count1Q2 == 5 && $count1Q3 == 1) ||
            ($count1Q1 == 5 && $count1Q2 == 4 && $count1Q3 == 2)
        ) {
            $type1 = 'VP';
        } elseif
        (($count1Q1 == 7 && (($count1Q2 == 0 && $count1Q3 == 4) || ($count1Q2 == 1 && $count1Q3 == 3))) ||
            ($count1Q1 == 6 && (($count1Q2 == 2 && $count1Q3 == 3) || ($count1Q2 == 1 && $count1Q3 == 4) || ($count1Q2 == 0 && $count1Q3 == 5))) ||
            ($count1Q1 == 5 && $count1Q2 == 1 && $count1Q3 == 5) ||
            ($count1Q1 == 5 && $count1Q2 == 2 && $count1Q3 == 4)
        ) {
            $type1 = 'VK';
        } elseif
        (($count1Q2 == 7 && (($count1Q1 == 4 && $count1Q3 == 0) || ($count1Q1 == 3 && $count1Q3 == 1))) ||
            ($count1Q2 == 6 && (($count1Q1 == 5 && $count1Q3 == 0) || ($count1Q1 == 4 && $count1Q3 == 1) || ($count1Q1 == 3 && $count1Q3 == 2))) ||
            ($count1Q2 == 5 && $count1Q1 == 5 && $count1Q3 == 1) ||
            ($count1Q2 == 5 && $count1Q1 == 4 && $count1Q3 == 2)
        ) {
            $type1 = 'PV';
        } elseif
        (($count1Q2 == 7 && (($count1Q1 == 1 && $count1Q3 == 3) || ($count1Q1 == 0 && $count1Q3 == 4))) ||
            ($count1Q2 == 6 && (($count1Q1 == 2 && $count1Q3 == 3) || ($count1Q1 == 1 && $count1Q3 == 4) || ($count1Q1 == 0 && $count1Q3 == 5))) ||
            ($count1Q2 == 5 && $count1Q1 == 1 && $count1Q3 == 5) ||
            ($count1Q2 == 5 && $count1Q1 == 2 && $count1Q3 == 4)
        ) {
            $type1 = 'PK';
        } elseif
        (($count1Q3 == 7 && (($count1Q1 == 4 && $count1Q2 == 0) || ($count1Q1 == 3 && $count1Q2 == 1))) ||
            ($count1Q3 == 6 && (($count1Q1 == 5 && $count1Q2 == 0) || ($count1Q1 == 4 && $count1Q2 == 1) || ($count1Q1 == 3 && $count1Q2 == 2))) ||
            ($count1Q3 == 5 && $count1Q2 == 1 && $count1Q1 == 5) ||
            ($count1Q3 == 5 && $count1Q1 == 4 && $count1Q2 == 2)
        ) {
            $type1 = 'KV';
        } elseif
        (($count1Q3 == 7 && (($count1Q1 == 1 && $count1Q2 == 3) || ($count1Q1 == 0 && $count1Q2 == 4))) ||
            ($count1Q3 == 6 && (($count1Q1 == 0 && $count1Q2 == 5) || ($count1Q1 == 1 && $count1Q2 == 4) || ($count1Q1 == 2 && $count1Q2 == 3))) ||
            ($count1Q3 == 5 && $count1Q2 == 5 && $count1Q1 == 1) ||
            ($count1Q3 == 5 && $count1Q1 == 2 && $count1Q2 == 4)
        ) {
            $type1 = 'KP';
        } // SAM - DOSHA
        elseif (($count1Q1 == 4 && $count1Q2 == 4 && $count1Q3 == 3) ||
            ($count1Q1 == 4 && $count1Q2 == 3 && $count1Q3 == 4) ||
            ($count1Q1 == 3 && $count1Q2 == 4 && $count1Q3 == 4)
        ) {
            $type1 = 'Sam-Dosha';
        } else {
            $type1 = 'Error1';
        }

        $type2 = '';
        if (($count2Q1 == 11 && $count2Q2 == 0 && $count2Q3 == 0) ||
            ($count2Q1 == 10 && (($count2Q2 == 1 && $count2Q3 == 0) || ($count2Q2 == 0 && $count2Q3 == 1))) ||
            ($count2Q1 == 9 && (($count2Q2 == 2 && $count2Q3 == 0) || ($count2Q2 == 1 && $count2Q3 == 1) || ($count2Q2 == 0 && $count2Q3 == 2))) ||
            ($count2Q1 == 8 && (($count2Q2 == 3 && $count2Q3 == 0) || ($count2Q2 == 2 && $count2Q3 == 1) || ($count2Q2 == 1 && $count2Q3 == 2) || ($count2Q2 == 0 && $count2Q3 == 3))) ||
            ($count2Q1 == 7 && $count2Q2 == 2 && $count2Q3 == 2) ||
            ($count2Q1 == 5 && $count2Q2 == 3 && $count2Q3 == 3)
        ) {
            if ($info['question22'] == A1) {
                $type2 = 'V';
            } else {
                $type2 = 'E1';
            }
        } elseif (($count2Q2 == 11 && $count2Q1 == 0 && $count2Q3 == 0) ||
            ($count2Q2 == 10 && (($count2Q1 == 1 && $count2Q3 == 0) || ($count2Q1 == 0 && $count2Q3 == 1))) ||
            ($count2Q2 == 9 && (($count2Q1 == 2 && $count2Q3 == 0) || ($count2Q1 == 1 && $count2Q3 == 1) || ($count2Q1 == 0 && $count2Q3 == 2))) ||
            ($count2Q2 == 8 && (($count2Q1 == 3 && $count2Q3 == 0) || ($count2Q1 == 2 && $count2Q3 == 1) || ($count2Q1 == 1 && $count2Q3 == 2) || ($count2Q1 == 0 && $count2Q3 == 3))) ||
            ($count2Q2 == 7 && $count2Q1 == 2 && $count2Q3 == 2) ||
            ($count2Q2 == 5 && $count2Q1 == 3 && $count2Q3 == 3)
        ) {
            if ($info['question22'] == A2_1 || $info['question22'] == A2_2) {
                $type2 = 'P';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q3 == 11 && $count2Q1 == 0 && $count2Q2 == 0) ||
            ($count2Q3 == 10 && (($count2Q1 == 1 && $count2Q2 == 0) || ($count2Q1 == 0 && $count2Q2 == 1))) ||
            ($count2Q3 == 9 && (($count2Q1 == 2 && $count2Q2 == 0) || ($count2Q1 == 1 && $count2Q2 == 1) || ($count2Q1 == 0 && $count2Q2 == 2))) ||
            ($count2Q3 == 8 && (($count2Q1 == 3 && $count2Q2 == 0) || ($count2Q1 == 2 && $count2Q2 == 1) || ($count2Q1 == 1 && $count2Q2 == 2) || ($count2Q1 == 0 && $count2Q2 == 3))) ||
            ($count2Q3 == 7 && $count2Q1 == 2 && $count2Q2 == 2) ||
            ($count2Q3 == 5 && $count2Q1 == 3 && $count2Q2 == 3)
        ) {
            if ($info['question22'] == A3) {
                $type2 = 'K';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q1 == 7 && (($count2Q2 == 4 && $count2Q3 == 0) || ($count2Q2 == 3 && $count2Q3 == 1))) ||
            ($count2Q1 == 6 && (($count2Q2 == 5 && $count2Q3 == 0) || ($count2Q2 == 4 && $count2Q3 == 1) || ($count2Q2 == 3 && $count2Q3 == 2))) ||
            ($count2Q1 == 5 && $count2Q2 == 5 && $count2Q3 == 1) ||
            ($count2Q1 == 5 && $count2Q2 == 4 && $count2Q3 == 2)
        ) {
            if ($info['question22'] == A1) {
                $type2 = 'VP';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q1 == 7 && (($count2Q2 == 0 && $count2Q3 == 4) || ($count2Q2 == 1 && $count2Q3 == 3))) ||
            ($count2Q1 == 6 && (($count2Q2 == 2 && $count2Q3 == 3) || ($count2Q2 == 1 && $count2Q3 == 4) || ($count2Q2 == 0 && $count2Q3 == 5))) ||
            ($count2Q1 == 5 && $count2Q2 == 1 && $count2Q3 == 5) ||
            ($count2Q1 == 5 && $count2Q2 == 2 && $count2Q3 == 4)
        ) {
            if ($info['question22'] == A1) {
                $type2 = 'VK';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q2 == 7 && (($count2Q1 == 4 && $count2Q3 == 0) || ($count2Q1 == 3 && $count2Q3 == 1))) ||
            ($count2Q2 == 6 && (($count2Q1 == 5 && $count2Q3 == 0) || ($count2Q1 == 4 && $count2Q3 == 1) || ($count2Q1 == 3 && $count2Q3 == 2))) ||
            ($count2Q2 == 5 && $count2Q1 == 5 && $count2Q3 == 1) ||
            ($count2Q2 == 5 && $count2Q1 == 4 && $count2Q3 == 2)
        ) {
            if ($info['question22'] == A2_1 || $info['question22'] == A2_2) {
                $type2 = 'PV';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q2 == 7 && (($count2Q1 == 1 && $count2Q3 == 3) || ($count2Q1 == 0 && $count2Q3 == 4))) ||
            ($count2Q2 == 6 && (($count2Q1 == 2 && $count2Q3 == 3) || ($count2Q1 == 1 && $count2Q3 == 4) || ($count2Q1 == 0 && $count2Q3 == 5))) ||
            ($count2Q2 == 5 && $count2Q1 == 1 && $count2Q3 == 5) ||
            ($count2Q2 == 5 && $count2Q1 == 2 && $count2Q3 == 4)
        ) {
            if ($info['question22'] == A2_1 || $info['question22'] == A2_2) {
                $type2 = 'PK';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q3 == 7 && (($count2Q1 == 4 && $count2Q2 == 0) || ($count2Q1 == 3 && $count2Q2 == 1))) ||
            ($count2Q3 == 6 && (($count2Q1 == 5 && $count2Q2 == 0) || ($count2Q1 == 4 && $count2Q2 == 1) || ($count2Q1 == 3 && $count2Q2 == 2))) ||
            ($count2Q3 == 5 && $count2Q2 == 1 && $count2Q1 == 5) ||
            ($count2Q3 == 5 && $count2Q1 == 4 && $count2Q2 == 2)
        ) {
            if ($info['question22'] == A3) {
                $type2 = 'KV';
            } else {
                $type2 = 'E1';
            }
        } elseif
        (($count2Q3 == 7 && (($count2Q1 == 1 && $count2Q2 == 3) || ($count2Q1 == 0 && $count2Q2 == 4))) ||
            ($count2Q3 == 6 && (($count2Q1 == 0 && $count2Q2 == 5) || ($count2Q1 == 1 && $count2Q2 == 4) || ($count2Q1 == 2 && $count2Q2 == 3))) ||
            ($count2Q3 == 5 && $count2Q2 == 5 && $count2Q1 == 1) ||
            ($count2Q3 == 5 && $count2Q1 == 2 && $count2Q2 == 4)
        ) {
            if ($info['question22'] == A3) {
                $type2 = 'KP';
            } else {
                $type2 = 'E1';
            }
        } // SAM - DOSHA
        elseif (($count2Q1 == 4 && $count2Q2 == 4 && $count2Q3 == 3) ||
            ($count2Q1 == 4 && $count2Q2 == 3 && $count2Q3 == 4) ||
            ($count2Q1 == 3 && $count2Q2 == 4 && $count2Q3 == 4)
        ) {
            $type2 = 'Sam-Dosha';
        } else {
            $type2 = 'Error2';
        }

        $type3 = '';
        if (($count3Q1 == 11 && $count3Q2 == 0 && $count3Q3 == 0) ||
            ($count3Q1 == 10 && (($count3Q2 == 1 && $count3Q3 == 0) || ($count3Q2 == 0 && $count3Q3 == 1))) ||
            ($count3Q1 == 9 && (($count3Q2 == 2 && $count3Q3 == 0) || ($count3Q2 == 1 && $count3Q3 == 1) || ($count3Q2 == 0 && $count3Q3 == 2))) ||
            ($count3Q1 == 8 && (($count3Q2 == 3 && $count3Q3 == 0) || ($count3Q2 == 2 && $count3Q3 == 1) || ($count3Q2 == 1 && $count3Q3 == 2) || ($count3Q2 == 0 && $count3Q3 == 3))) ||
            ($count3Q1 == 7 && $count3Q2 == 2 && $count3Q3 == 2) ||
            ($count3Q1 == 5 && $count3Q2 == 3 && $count3Q3 == 3)
        ) {
            $type3 = 'V';
        } elseif (($count3Q2 == 11 && $count3Q1 == 0 && $count3Q3 == 0) ||
            ($count3Q2 == 10 && (($count3Q1 == 1 && $count3Q3 == 0) || ($count3Q1 == 0 && $count3Q3 == 1))) ||
            ($count3Q2 == 9 && (($count3Q1 == 2 && $count3Q3 == 0) || ($count3Q1 == 1 && $count3Q3 == 1) || ($count3Q1 == 0 && $count3Q3 == 2))) ||
            ($count3Q2 == 8 && (($count3Q1 == 3 && $count3Q3 == 0) || ($count3Q1 == 2 && $count3Q3 == 1) || ($count3Q1 == 1 && $count3Q3 == 2) || ($count3Q1 == 0 && $count3Q3 == 3))) ||
            ($count3Q2 == 7 && $count3Q1 == 2 && $count3Q3 == 2) ||
            ($count3Q2 == 5 && $count3Q1 == 3 && $count3Q3 == 3)
        ) {
            $type3 = 'P';
        } elseif
        (($count3Q3 == 11 && $count3Q1 == 0 && $count3Q2 == 0) ||
            ($count3Q3 == 10 && (($count3Q1 == 1 && $count3Q2 == 0) || ($count3Q1 == 0 && $count3Q2 == 1))) ||
            ($count3Q3 == 9 && (($count3Q1 == 2 && $count3Q2 == 0) || ($count3Q1 == 1 && $count3Q2 == 1) || ($count3Q1 == 0 && $count3Q2 == 2))) ||
            ($count3Q3 == 8 && (($count3Q1 == 3 && $count3Q2 == 0) || ($count3Q1 == 2 && $count3Q2 == 1) || ($count3Q1 == 1 && $count3Q2 == 2) || ($count3Q1 == 0 && $count3Q2 == 3))) ||
            ($count3Q3 == 7 && $count3Q1 == 2 && $count3Q2 == 2) ||
            ($count3Q3 == 5 && $count3Q1 == 3 && $count3Q2 == 3)
        ) {
            $type3 = 'K';
        } elseif
        (($count3Q1 == 7 && (($count3Q2 == 4 && $count3Q3 == 0) || ($count3Q2 == 3 && $count3Q3 == 1))) ||
            ($count3Q1 == 6 && (($count3Q2 == 5 && $count3Q3 == 0) || ($count3Q2 == 4 && $count3Q3 == 1) || ($count3Q2 == 3 && $count3Q3 == 2))) ||
            ($count3Q1 == 5 && $count3Q2 == 5 && $count3Q3 == 1) ||
            ($count3Q1 == 5 && $count3Q2 == 4 && $count3Q3 == 2)
        ) {
            $type3 = 'VP';
        } elseif
        (($count3Q1 == 7 && (($count3Q2 == 0 && $count3Q3 == 4) || ($count3Q2 == 1 && $count3Q3 == 3))) ||
            ($count3Q1 == 6 && (($count3Q2 == 2 && $count3Q3 == 3) || ($count3Q2 == 1 && $count3Q3 == 4) || ($count3Q2 == 0 && $count3Q3 == 5))) ||
            ($count3Q1 == 5 && $count3Q2 == 1 && $count3Q3 == 5) ||
            ($count3Q1 == 5 && $count3Q2 == 2 && $count3Q3 == 4)
        ) {
            $type3 = 'VK';
        } elseif
        (($count3Q2 == 7 && (($count3Q1 == 4 && $count3Q3 == 0) || ($count3Q1 == 3 && $count3Q3 == 1))) ||
            ($count3Q2 == 6 && (($count3Q1 == 5 && $count3Q3 == 0) || ($count3Q1 == 4 && $count3Q3 == 1) || ($count3Q1 == 3 && $count3Q3 == 2))) ||
            ($count3Q2 == 5 && $count3Q1 == 5 && $count3Q3 == 1) ||
            ($count3Q2 == 5 && $count3Q1 == 4 && $count3Q3 == 2)
        ) {
            $type3 = 'PV';
        } elseif
        (($count3Q2 == 7 && (($count3Q1 == 1 && $count3Q3 == 3) || ($count3Q1 == 0 && $count3Q3 == 4))) ||
            ($count3Q2 == 6 && (($count3Q1 == 2 && $count3Q3 == 3) || ($count3Q1 == 1 && $count3Q3 == 4) || ($count3Q1 == 0 && $count3Q3 == 5))) ||
            ($count3Q2 == 5 && $count3Q1 == 1 && $count3Q3 == 5) ||
            ($count3Q2 == 5 && $count3Q1 == 2 && $count3Q3 == 4)
        ) {
            $type3 = 'PK';
        } elseif
        (($count3Q3 == 7 && (($count3Q1 == 4 && $count3Q2 == 0) || ($count3Q1 == 3 && $count3Q2 == 1))) ||
            ($count3Q3 == 6 && (($count3Q1 == 5 && $count3Q2 == 0) || ($count3Q1 == 4 && $count3Q2 == 1) || ($count3Q1 == 3 && $count3Q2 == 2))) ||
            ($count3Q3 == 5 && $count3Q2 == 1 && $count3Q1 == 5) ||
            ($count3Q3 == 5 && $count3Q1 == 4 && $count3Q2 == 2)
        ) {
            $type3 = 'KV';
        } elseif
        (($count3Q3 == 7 && (($count3Q1 == 1 && $count3Q2 == 3) || ($count3Q1 == 0 && $count3Q2 == 4))) ||
            ($count3Q3 == 6 && (($count3Q1 == 0 && $count3Q2 == 5) || ($count3Q1 == 1 && $count3Q2 == 4) || ($count3Q1 == 2 && $count3Q2 == 3))) ||
            ($count3Q3 == 5 && $count3Q2 == 5 && $count3Q1 == 1) ||
            ($count3Q3 == 5 && $count3Q1 == 2 && $count3Q2 == 4)
        ) {
            $type3 = 'KP';
        } // SAM - DOSHA
        elseif (($count3Q1 == 4 && $count3Q2 == 4 && $count3Q3 == 3) ||
            ($count3Q1 == 4 && $count3Q2 == 3 && $count3Q3 == 4) ||
            ($count3Q1 == 3 && $count3Q2 == 4 && $count3Q3 == 4)
        ) {
            $type3 = 'Sam-Dosha';
        } else {
            $type3 = 'Error3';
        }

        $melancholic1 = round(($count1Q1 * 100) / 11, 0);
        $melancholic2 = round(($count2Q1 * 100) / 11, 0);
        $phlegmatic1 = round(($count1Q3 * 100) / 11, 0);
        $phlegmatic2 = round(($count2Q3 * 100) / 11, 0);

        if ($info['question22'] == A2_1) {
            $sanguine1 = round(($count1Q2 * 100 * 0.25) / 11, 0);
            $sanguine2 = round(($count2Q2 * 100 * 0.25) / 11, 0);
            $sanguine3 = round(($sanguine1 + $sanguine2) / 2, 0);
            $choleric1 = round(($count1Q2 * 100 * 0.75) / 11, 0);
            $choleric2 = round(($count2Q2 * 100 * 0.75) / 11, 0);
            $choleric3 = round(($choleric1 + $choleric2) / 2, 0);
        }
        if ($info['question22'] == A2_2) {
            $sanguine1 = round(($count1Q2 * 100 * 0.75) / 11, 0);
            $sanguine2 = round(($count2Q2 * 100 * 0.75) / 11, 0);
            $sanguine3 = round(($sanguine1 + $sanguine2) / 2, 0);
            $choleric1 = round(($count1Q2 * 100 * 0.25) / 11, 0);
            $choleric2 = round(($count2Q2 * 100 * 0.25) / 11, 0);
            $choleric3 = round(($choleric1 + $choleric2) / 2, 0);
        }
        if ($info['question22'] == A1 || $info['question22'] == A3) {
            $sanguine1 = round(($count1Q2 * 100 * 0.5) / 11, 0);
            $sanguine2 = round(($count2Q2 * 100 * 0.5) / 11, 0);
            $sanguine3 = round(($sanguine1 + $sanguine2) / 2, 0);
            $choleric1 = round(($count1Q2 * 100 * 0.5) / 11, 0);
            $choleric2 = round(($count2Q2 * 100 * 0.5) / 11, 0);
            $choleric3 = round(($choleric1 + $choleric2) / 2, 0);
        }

        if ($melancholic1 == 0) {
            if ($sanguine1 >= $choleric1 && $sanguine1 >= $phlegmatic1) {
                $sanguine1 = $sanguine1 - PERCENT_5;
                $melancholic1 = PERCENT_5;
            } elseif ($choleric1 >= $sanguine1 && $choleric1 >= $phlegmatic1) {
                $choleric1 = $choleric1 - PERCENT_5;
                $melancholic1 = PERCENT_5;
            } elseif ($phlegmatic1 >= $sanguine1 && $phlegmatic1 >= $choleric1) {
                $phlegmatic1 = $phlegmatic1 - PERCENT_5;
                $melancholic1 = PERCENT_5;
            }
        }
        if ($phlegmatic1 == 0) {
            if ($sanguine1 >= $choleric1 && $sanguine1 >= $melancholic1) {
                $sanguine1 = $sanguine1 - PERCENT_5;
                $phlegmatic1 = PERCENT_5;
            } elseif ($choleric1 >= $sanguine1 && $choleric1 >= $melancholic1) {
                $choleric1 = $choleric1 - PERCENT_5;
                $phlegmatic1 = PERCENT_5;
            } elseif ($melancholic1 >= $sanguine1 && $melancholic1 >= $choleric1) {
                $melancholic1 = $melancholic1 - PERCENT_5;
                $phlegmatic1 = PERCENT_5;
            }
        }
        if ($sanguine1 == 0 || $choleric1 == 0) {
            if ($melancholic1 >= $phlegmatic1) {
                $melancholic1 = $melancholic1 - PERCENT_5;
                $sanguine1 = PERCENT_5 / 2;
                $choleric1 = PERCENT_5 / 2;
            } elseif ($phlegmatic1 >= $melancholic1) {
                $phlegmatic1 = $phlegmatic1 - PERCENT_5;
                $sanguine1 = PERCENT_5 / 2;
                $choleric1 = PERCENT_5 / 2;
            }
        }

        if ($melancholic2 == 0) {
            if ($sanguine2 >= $choleric2 && $sanguine2 >= $phlegmatic2) {
                $sanguine2 = $sanguine2 - PERCENT_5;
                $melancholic2 = PERCENT_5;
            } elseif ($choleric2 >= $sanguine2 && $choleric2 >= $phlegmatic2) {
                $choleric2 = $choleric2 - PERCENT_5;
                $melancholic2 = PERCENT_5;
            } elseif ($phlegmatic2 >= $sanguine2 && $phlegmatic2 >= $choleric2) {
                $phlegmatic2 = $phlegmatic2 - PERCENT_5;
                $melancholic2 = PERCENT_5;
            }
        }
        if ($phlegmatic2 == 0) {
            if ($sanguine2 >= $choleric2 && $sanguine2 >= $melancholic2) {
                $sanguine2 = $sanguine2 - PERCENT_5;
                $phlegmatic2 = PERCENT_5;
            } elseif ($choleric2 >= $sanguine2 && $choleric2 >= $melancholic2) {
                $choleric2 = $choleric2 - PERCENT_5;
                $phlegmatic2 = PERCENT_5;
            } elseif ($melancholic2 >= $sanguine2 && $melancholic2 >= $choleric2) {
                $melancholic2 = $melancholic2 - PERCENT_5;
                $phlegmatic2 = PERCENT_5;
            }
        }
        if ($sanguine2 == 0 || $choleric2 == 0) {
            if ($melancholic2 >= $phlegmatic2) {
                $melancholic2 = $melancholic2 - PERCENT_5;
                $sanguine2 = PERCENT_5 / 2;
                $choleric2 = PERCENT_5 / 2;
            } elseif ($phlegmatic2 >= $melancholic2) {
                $phlegmatic2 = $phlegmatic2 - PERCENT_5;
                $sanguine2 = PERCENT_5 / 2;
                $choleric2 = PERCENT_5 / 2;
            }
        }

        $melancholic3 = round(($melancholic1 + $melancholic2) / 2, 0);
        $phlegmatic3 = round(($phlegmatic1 + $phlegmatic2) / 2, 0);

        $result = [
            "type1" => $type1,
            "type2" => $type2,
            "type3" => $type3,
            "melancholic1" => $melancholic1,
            "melancholic2" => $melancholic2,
            "melancholic3" => $melancholic3,
            "phlegmatic1" => $phlegmatic1,
            "phlegmatic2" => $phlegmatic2,
            "phlegmatic3" => $phlegmatic3,
            "sanguine1" => $sanguine1,
            "sanguine2" => $sanguine2,
            "sanguine3" => $sanguine3,
            "choleric1" => $choleric1,
            "choleric2" => $choleric2,
            "choleric3" => $choleric3,
        ];
        return json_encode($result);
    }
}