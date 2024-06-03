<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'name' => 'Chevrolet Camaro',
            'year' => 1967,
            'country' => 'Estados Unidos',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1966, sendo lançado no mercado em 1967
            País de fabricação: é fabricado nos Estados Unidos. Historicamente, a produção do Camaro tem ocorrido em várias fábricas nos EUA, incluindo a planta da General Motors em Norwood, Ohio, e Van Nuys, Califórnia
            Curiosidade: O nome "Camaro" foi escolhido pela Chevrolet e, segundo a lenda, significa "amigo" ou "camarada" em francês, embora essa tradução seja disputada. As opções de motor incluíam desde um seis cilindros em linha de 3,8 litros até motores V8 de alto desempenho, como o 5,7 litros (350 ci) e o 6,5 litros (396 ci). O lançamento do Camaro foi acompanhado de uma campanha publicitária massiva pela Chevrolet, destacando-o como um "pony car" com muitas opções de personalização e desempenho, competindo diretamente com o Ford Mustang. Em seu primeiro ano de produção, o Camaro vendeu mais de 220.000 unidades, demonstrando seu forte apelo no mercado norte-americano.
            ',
            'preco_diaria' => 300.00,
            'image' => 'images/chevrolet_camaro.png'
        ]);

        Car::create([
            'name' => 'Chevrolet Chevette',
            'year' => 1973,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação:  foi fabricado pela primeira vez em 1973 (no Brasil), mercado mundial como nos Estados Unidos, o Chevette foi fabricado de 1975 a 1987
            País de fabricação: O primeiro país a fabricar o Chevrolet Chevette foi o Brasil
            Curiosidade: No Brasil, o Chevette foi oferecido com várias opções de motor, incluindo 1.4, 1.6, 1.6 álcool, é uma versão diesel de 1.8 litros, o Chevette Junior. O Chevette teve uma presença significativa no automobilismo, especialmente em rallys e corridas de turismo, devido à sua leveza e simplicidade mecânica. Conhecido por sua durabilidade e robustez, o Chevette era popular entre taxistas e motoristas de frota, que precisavam de um veículo confiável e de fácil manutenção.
            ',
            'preco_diaria' => 350.00,
            'image' => 'images/chevrolet_chevette.png'
        ]);

        Car::create([
            'name' => 'Chevrolet Corvette',
            'year' => 1953,
            'country' => 'Estados Unidos',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1953 
            Pais de fabricação: foi fabricado pela primeira vez nos Estados Unidos
            Curiosidade: O Chevrolet Corvette é um ícone da cultura automobilística americana, desde sua introdução em 1953. Com um design distinto e desempenho excepcional, o Corvette passou por várias gerações, cada uma com suas próprias inovações. Foi pioneiro como o primeiro carro de produção com fibra de vidro em sua carroceria. Variantes de alto desempenho, como o Z06 e o ZR1, solidificaram sua reputação como um competidor sério no mundo dos supercarros. A mais recente geração, a C8, introduziu um layout de motor central-traseiro pela primeira vez na história do Corvette. Além de sua excelência em estrada, o Corvette tem uma vibrante comunidade de entusiastas e uma história rica no automobilismo, participando de rallys e corridas de turismo ao redor do mundo.
            ',
            'preco_diaria' => 400.00,
            'image' => 'images/chevrolet_corvette.png'
        ]);

        Car::create([
            'name' => 'Chevrolet Impala',
            'year' => 1958,
            'country' => 'Estados Unidos',
            'description' => 'Ano de fabricação:  foi fabricado pela primeira vez em 1958
            Pais de fabricação: é fabricado nos Estados Unidos
            Curiosidade:O nome "Impala" foi inspirado em um antílope africano conhecido por sua velocidade e elegância. A Chevrolet escolheu esse nome para transmitir uma imagem de desempenho e estilo para seu carro. Reconhecido por seu design elegante e distintivo ao longo dos anos, o Impala apresenta linhas aerodinâmicas e detalhes cromados que o tornavam instantaneamente reconhecível. Durante os anos 1960, foi um dos carros mais vendidos nos Estados Unidos, atingindo recordes de vendas e estabelecendo-se como um dos pilares da linha Chevrolet.             
            ',
            'preco_diaria' => 250.00,
            'image' => 'images/chevrolet_impala.png'
        ]);

        Car::create([
            'name' => 'Chevrolet Opala',
            'year' => 1968,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1968
            País de fabricação: foi fabricado no Brasil
            Curiosidade: O Opala, fabricado no Brasil, se destacou como um dos carros mais populares do país, com produção até 1992 em São Caetano do Sul, São Paulo. Projetado especificamente para o mercado automotivo brasileiro, ofereceu uma variedade de motores, incluindo potentes motores de seis cilindros, como o famoso motor 4.1 (2500 cm³), reconhecido por seu desempenho e durabilidade. Além disso, teve uma notável participação no automobilismo brasileiro, competindo em diversas categorias, incluindo a Stock Car, onde se tornou um dos carros mais icônicos e bem-sucedidos da história da categoria
            ',
            'preco_diaria' => 300.00,
            'image' => 'images/chevrolet_opala.png'
        ]);

        Car::create([
            'name' => 'Chevrolet S10',
            'year' => 1982,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: uma picape compacta, teve sua produção iniciada em 1982
            Pais de fabricação: é fabricada em diferentes países ao redor do mundo, com variações regionais para atender às necessidades específicas dos mercados locais, a S10 é produzida principalmente no Brasil
            Curiosidade: Uma curiosidade interessante sobre a Chevrolet S10 é que ela foi uma das primeiras picapes compactas a serem produzidas no Brasil, introduzida em 1995 para competir no segmento de picapes médias. Desde então, tornou-se um dos modelos mais populares em seu segmento, conhecida por sua robustez, versatilidade e desempenho, sendo frequentemente escolhida tanto por consumidores individuais quanto por empresas comerciais
            ',
            'preco_diaria' => 260.00,
            'image' => 'images/chevrolet_s10.png'
        ]);

        Car::create([
            'name' => 'Dodge Dart',
            'year' => 1960,
            'country' => 'Estados Unidos',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1960
            Pais de fabricação: foi produzido principalmente nos Estados Unidos, nas fábricas da Dodge em diferentes localidades
            Curiosidade: O Dodge Dart foi lançado como um modelo full-size em 1960, mas ao longo do tempo, evoluiu para se tornar um carro compacto nas décadas de 1960 e 1970. Além de suas variantes de rua, o Dart teve sucesso nas corridas de arrancada e em outras competições automobilísticas, destacando-se na NHRA (National Hot Rod Association) por sua velocidade e desempenho
            ',
            'preco_diaria' => 400.00,
            'image' => 'images/dodge_dart.png'
        ]);

        Car::create([
            'name' => 'Dodge Fargo',
            'year' => 1962,
            'country' => 'Canadá',
            'description' => 'Ano de fabricação: A produção começou na década de 1930 e continuou até a década de 1970
            País de fabricação: A Fargo foi produzida principalmente no Canadá
            Curiosidade: apesar de ser uma linha de caminhões rebatizada da Dodge, ela desempenhou um papel significativo no mercado canadense. Os caminhões Fargo eram populares entre os agricultores, trabalhadores da construção e empresas de entrega no Canadá devido à sua confiabilidade e durabilidade. Eles se tornaram uma parte importante da paisagem automotiva do país e continuam a ser lembrados com carinho por muitos canadenses até hoje.
            ',
            'preco_diaria' => 370.00,
            'image' => 'images/dodge_fargo.png'
        ]);

        Car::create([
            'name' => 'Fiat 147',
            'year' => 1976,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1976
            País de fabricação: foi produzido inicialmente na Itália. No entanto, sua produção mais significativa ocorreu no Brasil, onde foi fabricado pela Fiat do Brasil a partir de 1976 até 1986
            Curiosidade:  ele foi um pioneiro em várias tecnologias automotivas no Brasil. Além de ser o primeiro carro brasileiro com motor transversal e tração dianteira, o 147 também introduziu outras inovações, como o uso de freios a disco nas quatro rodas em algumas versões. Essas características técnicas inovadoras contribuíram para tornar o Fiat 147 um carro revolucionário em seu tempo, estabelecendo novos padrões de engenharia e design para a indústria automobilística brasileira
            ',
            'preco_diaria' => 200.00,
            'image' => 'images/fiat_147.png'
        ]);

        Car::create([
            'name' => 'Fiat Marea',
            'year' => 1996,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: fabricado pela primeira vez em 1996
            País de fabricação: país de fabricação, o Marea foi produzido principalmente na Itália, onde a Fiat tem suas raízes. No entanto, o Marea também foi montado em outros países, como Brasil e Turquia, para atender às demandas específicas dos mercados locais
            Curiosidade: foi um carro que gerou opiniões bastante divergentes. Enquanto alguns admiravam seu design arrojado, conforto e desempenho, outros criticavam sua confiabilidade mecânica. O Marea foi um dos primeiros carros a apresentar o motor 5 cilindros em linha da Fiat, conhecido por sua suavidade e torque, mas também enfrentou problemas de reputação devido a questões de durabilidade e manutenção. Apesar das controvérsias, o Fiat Marea continua a ser lembrado por sua personalidade única e por representar uma era marcante na história da Fiat
            ',
            'preco_diaria' => 300.00,
            'image' => 'images/fiat_marea.png'
        ]);

        Car::create([
            'name' => 'Ford Mustang',
            'year' =>  1964,
            'country' => 'Estados Unidos',
            'description' => 'Ano de fabricação:  foi fabricado pela primeira vez em 1964
            Pais de fabricação: é produzido principalmente nos Estados Unidos, onde a Ford tem suas raízes
            Curiosidade: O Ford Mustang estreou no Salão Internacional do Automóvel de Nova York em abril de 1964, capturando rapidamente a atenção do público. Ficou famoso por suas aparições em filmes e programas de TV, como no icônico Mustang GT Fastback de 1968 em "Bullitt", estrelado por Steve McQueen. Além disso, o Mustang tem uma notável história de sucesso nas corridas, competindo em diversas categorias, como NASCAR, SCCA Trans-Am Series e NHRA, além de ser popular em eventos de arrancada e corridas de drift em todo o mundo.
            ',
            'preco_diaria' => 440.00,
            'image' => 'images/ford_mustang.png'
        ]);

        Car::create([
            'name' => 'Subaru Legado',
            'year' =>  1989,
            'country' => 'Japão',
            'description' => 'Ano de fabricação: foi fabricado pela primeira vez em 1989
            País de fabricação: o Legacy é produzido principalmente no Japão, onde a Subaru tem suas raízes e sua principal base de produção
            Curiosidade: o Subaru Legacy é que ele é conhecido por sua tração integral de série em todas as versões, tornando-o uma escolha popular para motoristas que enfrentam condições de estrada desafiadoras, como neve, gelo e terrenos acidentados. Além disso, o Legacy tem uma reputação de confiabilidade e durabilidade, sendo frequentemente elogiado por proprietários por sua capacidade de resistir ao teste do tempo e por sua dirigibilidade segura e estável em uma variedade de condições climáticas e terrenos
            ',
            'preco_diaria' => 960.00,
            'image' => 'images/subaru_legado.png'
        ]);

        Car::create([
            'name' => 'Brasilia',
            'year' =>  1973,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: foi fabricado pela Volkswagen do Brasil entre os anos de 1973 e 1982
            País de fabricação: o VW Brasília foi exclusivamente produzido no Brasil, sendo fabricado na fábrica da Volkswagen em São Bernardo do Campo, no estado de São Paulo
            Curiosidade: VW Brasília é que ele foi projetado para ser um carro compacto e econômico, ideal para as condições de estrada e necessidades do mercado brasileiro da época. Seu design versátil e espaço interno generoso o tornaram popular entre famílias e como veículo comercial. Além disso, o Brasília apresentava uma característica única: o motor refrigerado a ar, uma tecnologia comum nos carros da Volkswagen na época. Isso contribuiu para sua durabilidade e facilidade de manutenção, tornando-o uma escolha popular entre os proprietários de carros no Brasil.
            ',
            'preco_diaria' => 200.00,
            'image' => 'images/wv_brasilia.png'
        ]);

        Car::create([
            'name' => 'Kombi',
            'year' =>  1950,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação: A Volkswagen Kombi foi fabricada por várias décadas, desde 1950 até 2013.
            País de fabricação: a Kombi foi produzida em diferentes países ao redor do mundo, mas sua produção mais significativa ocorreu no Brasil. A Kombi foi fabricada na fábrica da Volkswagen em São Bernardo do Campo, no estado de São Paulo, Brasil
            Curiosidade: a Volkswagen Kombi é que ela foi um dos veículos mais versáteis e duráveis já produzidos. Conhecida por sua capacidade de transporte de carga e passageiros, a Kombi se tornou um símbolo de aventura e liberdade. Além disso, sua popularidade foi impulsionada pelo seu papel como veículo de transporte escolar, ambulância, van de entrega e até mesmo como um lar sobre rodas para muitas pessoas ao redor do mundo. A Kombi também teve um impacto significativo na cultura popular, sendo apresentada em filmes, músicas e obras de arte, deixando um legado duradouro como um ícone automotivo
            ',
            'preco_diaria' => 200.00,
            'image' => 'images/wv_kombi.png'
        ]);

        Car::create([
            'name' => 'Puma',
            'year' =>  1967,
            'country' => 'Brasil',
            'description' => 'Ano de fabricação:  O Puma GT foi fabricado pela primeira vez em 1967
            País de fabricação:  o Puma GT foi produzido exclusivamente no Brasil
            Curiosidade: o Puma GT é que foi inspirado nos carros esportivos europeus da época e rapidamente ganhou popularidade no Brasil como um carro esportivo acessível e elegante. Com sua carroceria esbelta e desempenho impressionante, o Puma GT conquistou o coração de muitos entusiastas de carros brasileiros, tornando-se um ícone da indústria automobilística nacional
            ',
            'preco_diaria' => 300.00,
            'image' => 'images/wv_puma.png'
        ]);

        

    }
}
