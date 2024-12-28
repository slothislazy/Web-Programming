<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'Test User',
            'email' => 'test@example.com',
            'phone_num' => '081231231'
        ]);
        User::factory()->create([
            'username' => 'Rafzy',
            'email' => 'rafze04@gmail.com',
            'phone_num' => '08111805071',
            'password' => Hash::make(12345678)

        ]);
        User::factory()->create([
            'username' => 'Megumi',
            'email' => 'megumi@gmail.com',
            'phone_num' => '08111111',
            'password' => Hash::make(12345678)

        ]);

        $categories = [
            ['name' => "Role Playing Game", "id" => 1],
            ['name' => "Indie Game", "id" => 2],
            ['name' => "Action", "id" => 3],
            ['name' => "Adventure", "id" => 4],
            ['name' => "Horror", "id" => 5],
            ['name' => "Multiplayer", "id" => 6],
            ['name' => "Puzzle", "id" => 7],
            ['name' => "Virtual Reality", "id" => 8],
            ['name' => "Open World", "id" => 9]
        ];
        
        foreach ($categories as $category) {
            Category::factory()->create($category);
        }


        Game::factory()->create([
            'title' => "The Witcher 3: Wild Hunt",
            "developer" => "CD Projekt RED",
            "price" => 499000,
            "release_date" => new Carbon('2015-05-19'),
            "category_id" => 1,
            "image" => "witcher-3.jpg",
            "description" => "Embark on a mesmerizing journey through a richly detailed fantasy world as Geralt of Rivia, a monster hunter navigating political intrigue and personal quests while seeking his missing adopted daughter in a war-torn, magical landscape. Encounter complex characters, battle deadly creatures, and shape the story with your choices."
        ]);
        
        Game::factory()->create([
            'title' => "Red Dead Redemption 2",
            "developer" => "Rockstar Games",
            "price" => 799000,
            "release_date" => new Carbon('2018-10-26'),
            "category_id" => 1,
            "image" => "rdr2.jpg",
            "description" => "Dive into an epic saga set in the fading era of the American Wild West. Experience the tale of Arthur Morgan and the Van der Linde gang as they fight to survive against government forces, rival gangs, and the inevitability of change. A masterclass in storytelling and open-world immersion."
        ]);
        
        Game::factory()->create([
            'title' => "Grand Theft Auto V",
            "developer" => "Rockstar North",
            "price" => 599000,
            "release_date" => new Carbon('2013-09-17'),
            "category_id" => 1,
            "image" => "gta-v.jpg",
            "description" => "Follow the intertwining lives of three criminals—Michael, Franklin, and Trevor—as they navigate a series of daring heists and personal struggles in the sprawling, dynamic city of Los Santos. Experience an unparalleled blend of action, humor, and chaos in this open-world masterpiece."
        ]);
        
        Game::factory()->create([
            'title' => "Dark Souls III",
            "developer" => "FromSoftware",
            "price" => 399000,
            "release_date" => new Carbon('2016-03-24'),
            "category_id" => 2,
            "image" => "dark-souls-3.jpg",
            "description" => "Immerse yourself in a dark, interconnected world filled with hauntingly beautiful ruins, fearsome enemies, and challenging bosses. Test your skills in combat and exploration as you uncover hidden lore and attempt to rekindle the fading fire in this iconic action RPG."
        ]);
        
        Game::factory()->create([
            'title' => "Hollow Knight",
            "developer" => "Team Cherry",
            "price" => 149000,
            "release_date" => new Carbon('2017-02-24'),
            "category_id" => 2,
            "image" => "hollow-knight.jpg",
            "description" => "Venture into Hallownest, a vast, mysterious underground kingdom teeming with unique characters and epic challenges. Battle fierce foes, discover hidden secrets, and unravel the kingdom's ancient mysteries in this beautifully crafted indie gem."
        ]);
        
        Game::factory()->create([
            'title' => "Stardew Valley",
            "developer" => "ConcernedApe",
            "price" => 129000,
            "release_date" => new Carbon('2016-02-26'),
            "category_id" => 3,
            "image" => "stardew-valley.jpg",
            "description" => "Escape to the countryside and build your dream farm in this charming life-simulation game. Grow crops, raise animals, and forge relationships with quirky townsfolk while uncovering the secrets of Stardew Valley. A heartwarming experience full of discovery and joy."
        ]);
        
        Game::factory()->create([
            'title' => "DOOM Eternal",
            "developer" => "id Software",
            "price" => 699000,
            "release_date" => new Carbon('2020-03-20'),
            "category_id" => 4,
            "image" => "doom-eternal.jpg",
            "description" => "Rip and tear your way through relentless demon hordes in this high-octane, adrenaline-fueled FPS. With a vast arsenal and breathtaking visuals, take on the role of the Doom Slayer and battle to save humanity from Hell’s invasion."
        ]);
        
        Game::factory()->create([
            'title' => "Minecraft",
            "developer" => "Mojang Studios",
            "price" => 259000,
            "release_date" => new Carbon('2011-11-18'),
            "category_id" => 3,
            "image" => "minecraft.jpg",
            "description" => "Enter a limitless world of creativity where you can build towering structures, mine precious resources, and survive perilous nights. Whether adventuring alone or with friends, Minecraft offers endless opportunities for exploration and innovation."
        ]);
        
        Game::factory()->create([
            'title' => "Cyberpunk 2077",
            "developer" => "CD Projekt RED",
            "price" => 699000,
            "release_date" => new Carbon('2020-12-10'),
            "category_id" => 9,
            "image" => "cyberpunk.jpg",
            "description" => "Step into the dystopian metropolis of Night City, a world bursting with neon lights, towering skyscrapers, and seedy underbellies. Play as V, a mercenary navigating a chaotic world of cybernetic implants, power struggles, and moral dilemmas. Engage in high-octane combat, drive futuristic vehicles, and shape your journey through an intricate narrative driven by your choices."
        ]);
        
        Game::factory()->create([
            'title' => "Among Us",
            "developer" => "InnerSloth",
            "price" => 49900,
            "release_date" => new Carbon('2018-06-15'),
            "category_id" => 6,
            "image" => "among-us.jpg",
            "description" => "Work together with your crew to complete tasks and ensure the ship's survival—unless you're the impostor. Use strategy and deception in this thrilling, social multiplayer game to uncover—or conceal—the truth."
        ]);
        
        Game::factory()->create([
            'title' => "Celeste",
            "developer" => "Maddy Makes Games",
            "price" => 199000,
            "release_date" => new Carbon('2018-01-25'),
            "category_id" => 2,
            "image" => "celeste.jpg",
            "description" => "Ascend a mysterious mountain while overcoming emotional and physical challenges. With tight controls, beautifully designed levels, and a heartfelt narrative, Celeste offers an unforgettable platforming adventure."
        ]);
        
        Game::factory()->create([
            'title' => "The Elder Scrolls V: Skyrim",
            "developer" => "Bethesda Game Studios",
            "price" => 499000,
            "release_date" => new Carbon('2011-11-11'),
            "category_id" => 1,
            "image" => "skyrim.jpg",
            "description" => "Explore a breathtaking open world filled with dragons, ancient ruins, and countless adventures. Shape your destiny as the Dragonborn in this RPG classic, where every choice impacts your journey."
        ]);
        
        Game::factory()->create([
            'title' => "Portal 2",
            "developer" => "Valve",
            "price" => 199000,
            "release_date" => new Carbon('2011-04-19'),
            "category_id" => 7,
            "image" => "portal-2.jpg",
            "description" => "Solve mind-bending puzzles in a hilariously dark world of science experiments gone awry. With an engaging storyline and innovative mechanics, Portal 2 is a brilliant blend of humor and ingenuity."
        ]);
        
        Game::factory()->create([
            'title' => "Half-Life: Alyx",
            "developer" => "Valve",
            "price" => 599000,
            "release_date" => new Carbon('2020-03-23'),
            "category_id" => 8,
            "image" => "half-life-alyx.jpg",
            "description" => "Step into the immersive world of virtual reality as Alyx Vance in this groundbreaking entry in the Half-Life series. Battle alien threats and uncover secrets in a stunning, atmospheric adventure."
        ]);
        
        Game::factory()->create([
            'title' => "Hades",
            "developer" => "Supergiant Games",
            "price" => 249000,
            "release_date" => new Carbon('2020-09-17'),
            "category_id" => 2,
            "image" => "hades.jpg",
            "description" => "Defy the god of the dead in this stylish roguelike dungeon crawler. Engage in fast-paced combat, build relationships with gods and spirits, and uncover a deeply engaging narrative in the underworld."
        ]);
        
        Game::factory()->create([
            'title' => "Terraria",
            "developer" => "Re-Logic",
            "price" => 149000,
            "release_date" => new Carbon('2011-05-16'),
            "category_id" => 3,
            "image" => "terraria.jpg",
            "description" => "Dig, build, and fight your way through a 2D sandbox world teeming with adventures and mysteries. From crafting powerful gear to defeating massive bosses, Terraria offers endless possibilities for creativity and exploration."
        ]);
        
        Game::factory()->create([
            'title' => "Control",
            "developer" => "Remedy Entertainment",
            "price" => 499000,
            "release_date" => new Carbon('2019-08-27'),
            "category_id" => 1,
            "image" => "control.jpg",
            "description" => "Delve into a world of strange phenomena and supernatural powers. As Jesse Faden, explore the Federal Bureau of Control's shifting headquarters and uncover the truth behind its mysteries in this mind-bending action game."
        ]);
        
        Game::factory()->create([
            'title' => "Sekiro: Shadows Die Twice",
            "developer" => "FromSoftware",
            "price" => 599000,
            "release_date" => new Carbon('2019-03-22'),
            "category_id" => 2,
            "image" => "sekiro.jpg",
            "description" => "Step into a beautifully realized version of feudal Japan as a skilled shinobi. Master swordplay and stealth to take on powerful enemies and uncover a gripping tale of loyalty and vengeance."
        ]);
        
        Game::factory()->create([
            'title' => "Elden Ring",
            "developer" => "FromSoftware",
            "price" => 599000,
            "release_date" => new Carbon('2022-02-25'),
            "category_id" => 2,
            "image" => "elden-ring.jpg",
            "description" => "Immerse yourself in the sprawling fantasy world of the Lands Between, designed by Hidetaka Miyazaki and George R.R. Martin. Venture through stunning landscapes, from dense forests to ruined castles, facing relentless foes, colossal bosses, and unraveling a gripping tale of ambition, power, and redemption. Customize your hero, master unique combat styles, and explore a seamless open-world filled with secrets and challenges."
        ]);
        
        Game::factory()->create([
            'title' => "The Outer Worlds",
            "developer" => "Obsidian Entertainment",
            "price" => 399000,
            "release_date" => new Carbon('2019-10-25'),
            "category_id" => 1,
            "image" => "outer-worlds.jpg",
            "description" => "Journey through the far reaches of space in this satirical sci-fi RPG. Your choices shape the fate of colonies and characters in a universe brimming with humor, intrigue, and adventure."
        ]);
    }
}
