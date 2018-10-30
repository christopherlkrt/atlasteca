<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Gender;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fullData = 'O Poderoso Chefão (1972);O Mágico de Oz (1939);Cidadão Kane (1941);Um Sonho de Liberdade (1994);Pulp Fiction (1994);Casablanca (1942);O Poderoso Chefão 2 (1974);E.T. (1982);2001: Uma Odisseia no Espaço (1968);A Lista de Schindler (1993);Guerra nas Estrelas (1977);De Volta Para o Futuro (1985);Os Caçadores da Arca Perdida (1981);Forrest Gump (1994);E o Vento Levou (1939);O Sol é Para Todos (1962);Apocalypse Now (1979);Noivo Neurótico, Noiva Nervosa (1977);Os Bons Companheiros (1990);A Felicidade não se Compra (1946);Chinatown (1974);O Silêncio dos Inocentes (1991);Lawrence da Arábia (1962);Tubarão (1975);A Noviça Rebelde (1965);Cantando na Chuva (1952);Clube dos Cinco (1985);A Primeira Noite de um Homem (1967);Blade Runner - O Caçador de Androides (1982);Um Estranho no Ninho (1975);A Princesa Prometida (1987);Star Wars: Episódio V - O Império Contra-Ataca (1980);Fargo (1996);Beleza Americana (1999);Laranja Mecânica (1971);Curtindo a Vida Adoidado (1986);Dr. Fantástico (1964);Harry & Sally - Feitos um Para o Outro (1989);O Iluminado (1980);O Clube da Luta (1999);Psicose (1960);Alien (1979);Toy Story (1995);Matrix (1999);Titanic (1997);O Resgate do Soldado Ryan (1998);Quanto Mais Quente Melhor (1959);Os Suspeitos (1995);Janela Indiscreta (1954);Jurassic Park (1993);O Grande Lebowski (1998);A Malvada (1950);Gênio Indomável (1997);Butch Cassidy (1969);Taxi Driver (1976);Brilho Eterno de Uma Mente Sem Lembranças (2004);O Cavaleiro das Trevas (2008);Crepúsculo dos Deuses (1950);Thelma & Louise (1991);O Fabuloso Destino de Amelie Poulain (2001);Amor, Sublime Amor (1961);Intriga Internacional (1959);Feitiço do Tempo (1993);Mary Poppins (1964);Touro Indomável (1980);O Rei Leão (1994);Avatar (2009);Monty Python e o Cálice Sagrado (1975);Gladiador (2000);Um Corpo que Cai (1958);Quase Famosos (2000);O Jovem Frankenstein (1974);Todos os Homens do Presidente (1976);Banzé no Oeste (1974);A Ponte do Rio Kwai (1957);Brokeback Mountain (2005);Os Caça-Fantasma (1984);12 Homens e uma Sentença (1957);Wall-E (2008);Sindicato dos Ladrões (1954);Amadeus (1984);O Senhor dos Anéis: A Sociedade do Anel (2001);Duro de Matar (1988);Inception (2010);Seven (1995);A Bela e a Fera (1991);The Lord of the Rings: The Return of the King (2003);Quem Quer Ser um Milionário (2008);Coração Selvagem (1995);Amnésia (2000);Rocky: O Lutador (1976);Up (2009);Contatos Imediatos do Terceiro Grau (1977);O Franco Atirador (1978);Doutor Jivago (1965);O Labirinto do Fauno (2006);Apertem os Cintos… O Piloto Sumiu (1980);Cães de Aluguel (1992);Bonnie e Clyde (1967);Os Sete Samurais (1954)';

        $movieData = explode(';',$fullData);
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

        $user = User::first();
        $genders = Gender::get();

        foreach ($movieData as $item){

            $getTitleAndYear = explode(' (',$item);

            $title = $getTitleAndYear[0];
            $year = str_replace(')','',$getTitleAndYear[1]);

            $movie = new Movie();

            $movie->user_id = $user->id;
            $movie->gender_id = $genders->random()->id;
            $movie->title = $title;
            $movie->slug = str_slug($title);
            $movie->description = $lorem;
            $movie->year = $year;
            $movie->save();
        }

    }
}