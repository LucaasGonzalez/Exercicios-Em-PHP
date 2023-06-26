<html> 
    <head>
        <meta charset = "UTF-8">
    </head>
    <body>
        <?php

        $mes = 7; // Mês de nascimento do usuario(1/12)
        $dia = 21; // Dia do nascimento do usuario (1/31)
        $ano = 2001; // Ano de nascimento do usuario
        $nome = "Rodrigo"; // Nome do usuario
        $idade = 2022 - $ano; // Calculo para idade do usuario 

        if($mes == 10 && $dia > 26){ // Calculo para descobrir se o usuario ja fez aniversario este ano 
            $idade -= 1;
        }else if($mes > 10){
            $idade -= 1;
        }
        
        echo "</br>Olá $nome Seja bem-vindo(a)!";
        echo "</br>Você pussui $idade anos de vida."; 

        switch ($mes) {   //Switch para informar o signo do usuario de acordo com seu dia e mês de nascimento.
            case 1:
                if($dia <= 20){
                echo "</br>De acordo com sua data de nascimento seu signo é capricórnio.
                </br>Você é uma pessoa racional e econômica, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento o seu signo é aquário.
                             </br>Você é uma pessoa engajada e desapegada, parabéns!";
            }break;
            case 2:
                if($dia <= 19){
                echo "</br>De acordo com sua data de nascimento seu signo é aquário
                      </br>Você é uma pessoa engajada e desapegada, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento o seu signo é peixes.
                      </br>Você é uma pessoa passiva e companheira, parabéns!";
            }break;
            case 3:
                if($dia <= 20){
                echo "</br>De acordo com sua data de nascimento seu signo é peixes.
                      </br>Você é uma pessoa passiva e companheira, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento o seu signo é áries.
                            </br>Você é uma pessoa impulsiva e determinada, parabéns!";
            }break;
            case 4:    
                if($dia <= 20){
                echo "</br>De acordo com sua data de nascimento seu signo é áries.
                     </br>Você é uma pessoa impulsiva e determinada, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é touro.
                             </br>Você é uma pessoa calma e apegada, parabéns!";
            }break;      
            case 5:
                if($dia <= 20){
                echo "</br>De acordo com sua data de nascimento seu signo é touro.
                      </br>Você é uma pessoa calma e apegada, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é gêmeos.
                    </br>Você é uma pessoa dona da razão e bem comunicativa, parabéns!";
            }break;
            case 6:
            if($dia <= 20){
                echo "</br>De acordo com sua data de nascimento seu signo é gêmeos.
                      </br>Você é uma pessoa dona da razão e bem comunicativa, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é câncer.
                      </br>Você é uma pessoa muito sentimental e emocional, parabéns!";
            }break;
            case 7:
            if($dia <= 22){
                echo "</br>De acordo com sua data de nascimento seu signo é câncer.
                      </br>Você é uma pessoa muito sentimental e emocional, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é leão.
                             </br>Você é uma pessoa vaidosa e agitada, parabéns!";
            }break;
            case 8:
            if($dia <= 22){
                echo "</br>De acordo com sua data de nascimento seu signo é leão.
                      </br>Você é uma pessoa vaidosa e agitada, parabéns!!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é virgem.
                      </br>Você é uma pessoa perfeccionista, organizada e dona da razão, parabéns!";
            }break;
            case 9:
            if($dia <= 22){
                echo "</br>De acordo com sua data de nascimento seu signo é virgem.
                      </br>Você é uma pessoa perfeccionista, organizada e dona da razão, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é libra.
                             </br>Você é uma pessoa indecisa e muito elegante, parabéns!";
            }break;
            case 10:
            if($dia <= 22){
                echo "</br>De acordo com sua data de nascimento seu signo é libra.
                      </br>Você é uma pessoa indecisa e muito elegante, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é escorpião.
                      </br>Você é uma pessoa rancorosa e controladora, parabéns";
            }break;
            case 11:
            if($dia <= 21){
                echo "</br>De acordo com sua data de nascimento seu signo é escorpião.
                </br>Você é uma pessoa rancorosa e controladora, parabéns";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é sagitário.
                             </br>Você é uma pessoa livre e alegre, parabéns!";
            }break;
            case 12:
            if($dia <= 21){
                echo "</br>De acordo com sua data de nascimento seu signo é sagitário.
                      </br>Você é uma pessoa livre e alegre, parabéns!";
                }else{ echo "</br>De acordo com sua data de nascimento seu signo é capricornio.
                      </br>Você é uma pessoa racional e econômica, parabéns!";
            }break;
            default:   echo "</br>Mês invalido!";
            }
            echo "</br>Obrigado por utilizar o programa, volte sempre!"; 
        
        ?>
    </body>
</html>