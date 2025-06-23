<?php

namespace App\Services;

class questTest
{
    public function questTest()
    {
        try {

            /**
             * http://127.0.0.1:8000/?nome=tester&email=teste@teste.com
             */
            !empty($_GET["nome"]) ? $var['nome'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["nome"])))) : '';
            !empty($_GET["email"]) ? $var['email'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["email"])))) : '';
            !empty($_GET["fone"]) ? $var['fone'] = strip_tags(addslashes(trim(htmlspecialchars($_GET["fone"])))) : '';

            $var['opt'] = [
                0 => ["text" => "Raramente", "val" => -1],
                1 => ["text" => "Às vezes", "val" => 1],
                2 => ["text" => "De vez em quando", "val" => 2],
                3 => ["text" => "Maior parte das vezes", "val" => 3]
            ];

            // $var['opt'] = [
            //     0 => ["text" => "3", "val" => 3],
            //     1 => ["text" => "2", "val" => 2],
            //     2 => ["text" => "1", "val" => 1],
            //     3 => ["text" => "-1", "val" => -1]
            // ];

            $var['instrucao'] = [
                "3 = a afirmação aplica-se \"TOTALMENTE\" a mim",
                "2 = a afirmação aplica-se \"APENAS EM PARTE\" a mim",
                "1 = a afirmação só se aplica \"LIGEIRAMENTE\" a mim",
                "-1 = a afirmação \"ABSOLUTAMENTE NÃO SE APLICA\" a mim"
            ];

            $var['sessao'] = [
                1 => [
                    "titulo" => "01: Qual a Deusa predominante em mim?",
                    "questoes" => [
                        ["id" => "qst1", "num" => 1, "pergunta" => "A) Como não saio muito, roupas e maquiagem não são tão importantes para mim."],
                        ["id" => "qst2", "num" => 2, "pergunta" => "B) Prefiro usar jeans e uma camisa confortável."],
                        ["id" => "qst3", "num" => 3, "pergunta" => "C) Minha aparência não é nada convencional."],
                        ["id" => "qst4", "num" => 4, "pergunta" => "D) Gosto de me vestir bem, mas de maneira conservadora, e de usar pouca maquiagem."],
                        ["id" => "qst5", "num" => 5, "pergunta" => "E) Gosto de me arrumar e de me mostrar atraente."],
                        ["id" => "qst6", "num" => 6, "pergunta" => "F) Estar bem vestida e maquiada me dá segurança para enfrentar o mundo."],
                    ]
                ],
                2 => [
                    "titulo" => "02: MEU CORPO (como eu me dou com o corpo)",
                    "questoes" => [
                        ["id" => "qst7", "num" => 7, "pergunta" => "A) Eu me inclino a não pensar sobre o meu corpo."],
                        ["id" => "qst8", "num" => 8, "pergunta" => "B) Meu corpo se sente muito melhor quando estou ativa e fazendo exercícios."],
                        ["id" => "qst9", "num" => 9, "pergunta" => "C) Gosto que meu corpo seja tocado bastante por quem eu amo."],
                        ["id" => "qst10", "num" => 10, "pergunta" => "D) Muitas vezes eu absolutamente não me sinto no meu corpo."],
                        ["id" => "qst11", "num" => 11, "pergunta" => "E) Acho embaraçoso falar sobre o meu corpo."],
                        ["id" => "qst12", "num" => 12, "pergunta" => "F) Adora estar grávida/Quero muito engravidar."],
                    ]
                ],
                3 => [
                    "titulo" => "03: CASA E LAR (o que tem importância para mim)",
                    "questoes" => [
                        ["id" => "qst13", "num" => 13, "pergunta" => "A) Gosto que minha casa seja elegante e impressione as pessoas."],
                        ["id" => "qst14", "num" => 14, "pergunta" => "B) Prefiro a cidade; para mim um apartamento está ótimo."],
                        ["id" => "qst15", "num" => 15, "pergunta" => "C) Minha casa precisa ser aconchegante e ter lugar para todos."],
                        ["id" => "qst16", "num" => 16, "pergunta" => "D) Preciso de privacidade e espaço para as coisas que gosto de fazer."],
                        ["id" => "qst17", "num" => 17, "pergunta" => "E) O lugar onde moro tem que ser confortável e bonito."],
                        ["id" => "qst18", "num" => 18, "pergunta" => "F) Prefiro viver no campo ou onde eu possa estar perto de parques e espaços abertos."],
                    ]
                ],
                4 => [
                    "titulo" => "04: Alimentação e comida (a importância para mim)",
                    "questoes" => [
                        ["id" => "qst19", "num" => 19, "pergunta" => "A) Tomo cuidado com a alimentação afim de manter o meu corpo saudável."],
                        ["id" => "qst20", "num" => 20, "pergunta" => "B) Gosto de jantar fora em algum lugar romântico."],
                        ["id" => "qst21", "num" => 21, "pergunta" => "C) Gosto muito de comer fora onde se possa conversar."],
                        ["id" => "qst22", "num" => 22, "pergunta" => "D) Eu realmente gosto de cozinhar para os outros."],
                        ["id" => "qst23", "num" => 23, "pergunta" => "E) As refeições são momentos familiares importantes."],
                        ["id" => "qst24", "num" => 24, "pergunta" => "F) Comer não é uma coisa muito importante para mim."],
                    ]
                ],
                5 => [
                    "titulo" => "05: Infância (como eu costumava ser)",
                    "questoes" => [
                        ["id" => "qst25", "num" => 25, "pergunta" => "A) Eu tinha muitas brincadeiras secretas e muitos mundos imaginários."],
                        ["id" => "qst26", "num" => 26, "pergunta" => "B) Eu sempre dirigia as brincadeiras com as minhas amigas."],
                        ["id" => "qst27", "num" => 27, "pergunta" => "C) Eu gostava de brincar basicamente com bonecas."],
                        ["id" => "qst28", "num" => 28, "pergunta" => "D) Eu tinha sempre o nariz enfiado num livro, depois de uma certa idade."],
                        ["id" => "qst29", "num" => 29, "pergunta" => "E) Eu adorava estar ao ar livre e entre os animais."],
                        ["id" => "qst30", "num" => 30, "pergunta" => "F) Eu adorava me vestir e me arrumar como gente grande."],
                    ]
                ],
                6 => [
                    "titulo" => "06: OS HOMENS (o que eu preciso em um)",
                    "questoes" => [
                        ["id" => "qst31", "num" => 31, "pergunta" => "A) Quero um homem que me excite sexualmente sempre."],
                        ["id" => "qst32", "num" => 32, "pergunta" => "B) Quero um homem que me proteja e me faça mimos."],
                        ["id" => "qst33", "num" => 33, "pergunta" => "C) Gosto de um homem que seja independente e me proporcione bastante espaço."],
                        ["id" => "qst34", "num" => 34, "pergunta" => "D) Preciso de um homem que me desafie intelectualmente."],
                        ["id" => "qst35", "num" => 35, "pergunta" => "E) Preciso de um homem que compreenda o meu mundo interior."],
                        ["id" => "qst36", "num" => 36, "pergunta" => "F) Quero um homem de cuja posição no mundo eu possa me orgulhar."],
                    ]
                ],
                7 => [
                    "titulo" => "07: AMOR E CASAMENTO (o que significa para mim)",
                    "questoes" => [
                        ["id" => "qst37", "num" => 37, "pergunta" => "A) O casamento só dá certo quando houver uma ligação espiritual maior."],
                        ["id" => "qst38", "num" => 38, "pergunta" => "B) O casamento é o alicerce da sociedade."],
                        ["id" => "qst39", "num" => 39, "pergunta" => "C) O amor é mais importante que tudo; sem ele o meu casamento seria vazio."],
                        ["id" => "qst40", "num" => 40, "pergunta" => "D) Tudo bem com o amor e o casamento, desde que eu tenha bastante liberdade."],
                        ["id" => "qst41", "num" => 41, "pergunta" => "E) O casamento protege os filhos; o amor apenas não é suficiente."],
                        ["id" => "qst42", "num" => 42, "pergunta" => "F) Meu casamento às vezes tem que ser sacrificado em função do meu trabalho."],
                    ]
                ],
                8 => [
                    "titulo" => "08: SEXUALIDADE (como eu sou na cama)",
                    "questoes" => [
                        ["id" => "qst43", "num" => 43, "pergunta" => "A) Às vezes é difícil eu me soltar completamente quando faço sexo."],
                        ["id" => "qst44", "num" => 44, "pergunta" => "B) Eu me excito facilmente com o homem certo."],
                        ["id" => "qst45", "num" => 45, "pergunta" => "C) Às vezes leva um certo tempo até eu de fato entrar no meu corpo."],
                        ["id" => "qst46", "num" => 46, "pergunta" => "D) No sexo adoro tanto dar quanto receber."],
                        ["id" => "qst47", "num" => 47, "pergunta" => "E) Eu sou meio tímida sexualmente, mas posso me tornar quase selvagem."],
                        ["id" => "qst48", "num" => 48, "pergunta" => "F) O sexo pode ser extático e quase místico para mim."],
                    ]
                ],
                9 => [
                    "titulo" => "09: OS FILHOS (o papel deles na minha vida / imagine se tivesse filhos caso não tenha.)",
                    "questoes" => [
                        ["id" => "qst49", "num" => 49, "pergunta" => "A) Sinto-me mais feliz quando estou fazendo alguma coisa ao ar livre com meus filhos."],
                        ["id" => "qst50", "num" => 50, "pergunta" => "B) Meus filhos são a maior realização da minha vida."],
                        ["id" => "qst51", "num" => 51, "pergunta" => "C) Eu espero que meus filhos venham a ser um grande crédito a meu favor."],
                        ["id" => "qst52", "num" => 52, "pergunta" => "D) Prefiro não ter filhos para me dedicar à minha carreira."],
                        ["id" => "qst53", "num" => 53, "pergunta" => "E) Eu amo os meus filhos, mas a minha vida amorosa é igualmente importante."],
                        ["id" => "qst54", "num" => 54, "pergunta" => "F) Eu amo os meus filhos e quero sempre saber o que estão pensando ou sentindo."],
                    ]
                ],
                10 => [
                    "titulo" => "10: PASSATEMPOS (coisas que eu gosto de fazer)",
                    "questoes" => [
                        ["id" => "qst55", "num" => 55, "pergunta" => "A) Metafísica, leitura de tarô, astrologia, diário dos sonhos, Seminários da Nova Era, arte e rituais pessoais."],
                        ["id" => "qst56", "num" => 56, "pergunta" => "B) Colecionar joias, objetos de arte e roupas bonitas; moda, música, teatro."],
                        ["id" => "qst57", "num" => 57, "pergunta" => "C) Esportes, atletismo, correr, acampar, pescar, velejar, montar a cavalo."],
                        ["id" => "qst58", "num" => 58, "pergunta" => "D) Serviços comunitários, clubes sociais, grupos de voluntários, igrejas paroquiais."],
                        ["id" => "qst59", "num" => 59, "pergunta" => "E) Campanhas políticas, apoio a minorias, museus, séries de conferências, leituras."],
                        ["id" => "qst60", "num" => 60, "pergunta" => "F) Cozinhar, jardinar, bordar, tecer, costurar."],
                    ]
                ],
                11 => [
                    "titulo" => "11: FESTAS (como eu me comporto)",
                    "questoes" => [
                        ["id" => "qst61", "num" => 61, "pergunta" => "A) Eu geralmente me envolvo em discussões políticas ou intelectuais."],
                        ["id" => "qst62", "num" => 62, "pergunta" => "B) Costumo ser atraída por pessoas com problemas."],
                        ["id" => "qst63", "num" => 63, "pergunta" => "C) Prefiro ser a anfitriã das minhas próprias festas."],
                        ["id" => "qst64", "num" => 64, "pergunta" => "D) Não consigo de deixar de querer localizar o homem mais sensual do lugar."],
                        ["id" => "qst65", "num" => 65, "pergunta" => "E) Gosto de ter a certeza de que todos estão se divertindo."],
                        ["id" => "qst66", "num" => 66, "pergunta" => "F) Festas me deixam tensas, não vou muito a elas."],
                    ]
                ],
                12 => [
                    "titulo" => "12: AMIZADES (o lugar que ocupam em minha vida)",
                    "questoes" => [
                        ["id" => "qst67", "num" => 67, "pergunta" => "A) A maioria das minhas amigas têm filhos da mesma idade que os meus."],
                        ["id" => "qst68", "num" => 68, "pergunta" => "B) Escolho as minhas amizades com muito cuidado, elas são muito importantes para mim."],
                        ["id" => "qst69", "num" => 69, "pergunta" => "C) Gosto de partilhar minha últimas ideias e projetos com minhas amigas e meus amigos."],
                        ["id" => "qst70", "num" => 70, "pergunta" => "D) Minhas amizades tendem a ser amizades mágicas."],
                        ["id" => "qst71", "num" => 71, "pergunta" => "E) Minhas amigas são basicamente as esposas do meu marido."],
                        ["id" => "qst72", "num" => 72, "pergunta" => "F) Meus amigos são geralmente mais importantes para mim do que as minhas amigas."],
                    ]
                ],
                13 => [
                    "titulo" => "13: LIVROS (que tipo de livros eu trago por perto)",
                    "questoes" => [
                        ["id" => "qst73", "num" => 73, "pergunta" => "A) Livros de receitas, de artesanato, de como cuidar de crianças."],
                        ["id" => "qst74", "num" => 74, "pergunta" => "B) Literatura séria, biografias, livros de viagens, historia ilustrada."],
                        ["id" => "qst75", "num" => 75, "pergunta" => "C) Livros da Nova Era, psicologia, metafísica, livros de canalização mediunidade contemporânea), I Ching."],
                        ["id" => "qst76", "num" => 76, "pergunta" => "D) Livros de esporte e saúde, manuais de ioga, livros de animais, da vida selvagem, de como fazer coisas."],
                        ["id" => "qst77", "num" => 77, "pergunta" => "E) Livros de artes, biografias populares, romances, poesia."],
                        ["id" => "qst78", "num" => 78, "pergunta" => "F) Política, sociologia, livros intelectuais, literatura avant-garde, livros feministas."],
                    ]
                ],
                14 => [
                    "titulo" => "14: O MUNDO AÍ AFORA (minha atitude)",
                    "questoes" => [
                        ["id" => "qst79", "num" => 79, "pergunta" => "A) Eu sempre procuro me manter informada sobre o que acontece no mundo."],
                        ["id" => "qst80", "num" => 80, "pergunta" => "B) A política só me interessa pelas intrigas de bastidores."],
                        ["id" => "qst81", "num" => 81, "pergunta" => "C) Eu conheço mais o mundo pelos meus sonhos do que pela TV ou pelos jornais."],
                        ["id" => "qst82", "num" => 82, "pergunta" => "D) Eu raramente sei – ou quero saber! – o que está acontecendo no mundo."],
                        ["id" => "qst83", "num" => 83, "pergunta" => "E) O mundo é basicamente dos homens, eles que se virem."],
                        ["id" => "qst84", "num" => 84, "pergunta" => "F) É importante para mim ter um papel ativo na comunidade."],
                    ]
                ]
            ];
            return $var;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
