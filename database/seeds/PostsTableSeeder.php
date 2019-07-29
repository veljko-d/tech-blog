<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PostsTableSeeder
 */
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title'       => 'Sony Xperia 1 screen works in 4K all the time',
                'slug'        => 'sony-xperia-1-screen-works-in-4k-all-the-time',
                'content'     => 'Sony launched the Xperia 1 with the first 4K OLED display in a smartphone. It arrived with a 21:9 ratio and the whole panel is trademarked under the moniker CinemaWide. According to moderators on an official Sony forum, it won\'t follow in the footsteps of the XZ2 Premium and revert to 1080p for most of the UI and apps - everything will be shown in the 4K resolution of 3840 x 1644 pixels.

Still, the apps that do not support native 4K and will work in Full HD until support is added. The native apps will all be updated to support the new resolution - Home Screen, Gallery, Settings, along with third-party platforms like Netflix are all going to be ready by the time the phone hits the shelves.',
                'source'      => 'https://www.gsmarena.com/xperia_1_screen_uses_4k_resolution_all_the_time-news-36162.php',
                'user_id'     => 5,
                'category_id' => 1,
                'created_at'  => '2019-03-22 17:20:00',
            ],
            [
                'title'       => 'Intel teases its graphics card in prototype renders',
                'slug'        => 'intel-teases-its-graphics-card-in-prototype-renders',
                'content'     => 'Intel uses its Odyssey event at GDC 2019 to show off some prototype renders of its upcoming Xe graphics cards.

Intel hosted some members of a newly-formed graphics card community, a group of people surfing the hype wave of Intel\'s upcoming launch of graphics card for both the professional and gaming markets.

The Odyssey event was held during GDC 2019 in San Francisco, with a few different concept designs teased that fans have submitted. Intel being this confident showing off concept designs leads me to hoping that they actually use them, even if we get a launch of a few different SKUs, the same card/specs but different designs would be cool.',
                'source'      => 'https://www.tweaktown.com/news/65311/intel-teases-graphics-card-prototype-renders/index.html',
                'user_id'     => 5,
                'category_id' => 2,
                'created_at'  => '2019-03-23 13:00:00',
            ],
            [
                'title'       => 'AMD addresses Spoiler vulnerability: Ryzen users are safe from this one',
                'slug'        => 'amd-addresses-spoiler-vulnerability-ryzen-users-are-safe-from-this-one',
                'content'     => 'In context: Researchers continue to find ways to abuse and exploit speculative execution on modern CPUs. The newest vulnerability has been named "Spoiler," and while it\'ll likely be a thorn in Intel\'s side for some time to come with no viable solution, AMD\'s processors are unaffected claims the CPU maker.

Researchers at Worcester Polytechnic Institute in the US, and the University of Lübeck in Germany, recently discovered another speculative execution vulnerability impacting Intel processors. Dubbed "Spoiler," and like Spectre before it, the flaw preys upon the CPU\'s speculative execution engine that presciently guesses upcoming computations to boost performance.',
                'source'      => 'https://www.techspot.com/news/79234-amd-addresses-spoiler-vulnerability-ryzen-users-safe-one.html',
                'user_id'     => 3,
                'category_id' => 2,
                'created_at'  => '2019-03-18 14:59:00',
            ],
            [
                'title'       => 'Samsung Introduces HBM2E Memory, Packing a 33% Bandwidth Boost',
                'slug'        => 'samsung-introduces-hbm2e-memory-packing-a-33-bandwidth-boost',
                'content'     => 'At Nvidia\'s GPU Technology Conference, GTC, Samsung has revealed their latest HBM memory innovation, showcasing HBM2E "Flashbolt" memory, which offers a 33% increase in speed over the company\'s older HBM2 chips. 

When compared to Samsung\'s already fast Aquabolt HBM2 offerings, which can deliver u to 2.4Gbps speeds, Flashbolt can offer 3.2Gbps transfer rates, a 33% increase over what was previously possible. 

Each of the die used in Samsung\'s Flashpoint HBM2 memory is 16Gb in size, which when stacked create 16GB memory chips, each of which packs 410GB/s of memory bandwidth. For context, AMD\'s Radeon RX Vega 56 offers 410GB/s of memory bandwidth over two HBM2 memory chips. Yes, Samsung\'s Flashbolt HBM2 memory offers a 2x boost in speed over the memory used in the RX Vega 56.',
                'source'      => 'https://www.overclock3d.net/news/memory/samsung_introduces_hbm2e_memory_packing_a_33_bandwidth_boost/1',
                'user_id'     => 2,
                'category_id' => 2,
                'created_at'  => '2019-03-20 15:00:00',
            ],
            [
                'title'       => 'Xiaomi Mi A3 to come with an in-display fingerprint scanner',
                'slug'        => 'xiaomi-mi-a3-to-come-with-an-in-display-fingerprint-scanner',
                'content'     => 'Xiaomi might have hit the jackpot with the latest Redmi series, but the company keeps pushing. The latest tech that it wants to bring to its midrangers, is the under-display fingerprint scanner. Reports from XDA-Developers revealed at least three new phones with the FOD technology (fingerprint-on-display) were spotted for hardware testing, two of them with codenames suggesting Android One.

They are most likely the Xiaomi Mi A3 and Xiaomi Mi A3 Lite and one of their Chinese versions.',
                'source'      => 'https://www.gsmarena.com/xiaomi_mi_a3_to_come_with_an_indisplay_fingerprint_scanner-news-36160.php',
                'user_id'     => 8,
                'category_id' => 1,
                'created_at'  => '2019-03-22 16:10:00',
            ],
            [
                'title'       => 'Halo: The Master Chief Collection\'s PC Version to be Playable Early through the "Halo Insider" Program',
                'slug'        => 'halo-the-master-chief-collections-pc-version-to-be-playable-early-through-the-halo-insider-program',
                'content'     => 'Microsoft and 343 Industries has revealed the "Halo Insider" program for PC and Xbox One, a "new way" for fans of the series to gain early access to future titles and help improve new releases as their launch approaches. 

At the latest Halo tournament at SXSW, Microsoft confirmed that the PC version of Halo: The Master Chief Collection is about to enter its testing stages, with pre-launch tests for Halo: Reach coming first. This will be the first time that the game will be playable on the PC platform. 

At the time of writing, signups for the Halo Insider program are open to the public, with PC gamers being required to provide Microsoft/343i with their system specifications, which are to be given in the form of DxDiag files. This will enable the game\'s developers to select specific hardware configurations if required. Steam accounts must also be linked to your Halo Insider account to be considered for PC testing. 

In the future, the Halo Insider program will also be used for future Halo: Infinite tests, though for now, the system is primarily in place for PC testing for the Master Chief Collection. Former Master Chief Collection (MCC) Insiders need to apply to the Halo Insider program, as members of the former are not automatically part of the latter.',
                'source'      => 'https://www.overclock3d.net/news/software/halo_the_master_chief_collection_s_pc_version_to_be_playable_early_through_the_halo_insider_program/1',
                'user_id'     => 6,
                'category_id' => 4,
                'created_at'  => '2019-03-18 13:50:00',
            ],
            [
                'title'       => 'Thunderbolt 3 becomes USB4? - Intel Contributes Thunderbolt 3 to Create USB4 Specification',
                'slug'        => 'thunderbolt-3-becomes-usb4-intel-contributes-thunderbolt-3-to-create-usb4-specification',
                'content'     => 'Last week USB-IF formally announced USB 3.2 alongside a confusing new naming scheme, but now it looks like USB 3.2, and its ultra-fast USB 3.2 Gen 2x2 variant, is going to be shortlived as USB\'s flagship connectivity standard. 

Today, the USB Promoter Group has revealed its USB4 specification, which thanks to the contribution of Intel\'s Thunderbolt standard will offer 40Gbps of bandwidth, a 2x improvement over USB 3.2 Gen 2X2. 

Yes, this means that Intel has handed over Thunberbolt 3.0 to the USB Promoter group, effectively allowing Thunderbolt 3 to become the next iteration of USB, while also maintaining full backwards compatibility with USB 3.2, USB 2.0 and Thunderbolt 3. 

So why would Intel do this? The answer is simple, market adoption and competition. Starting with Ice Lake, an upcoming 10nm processor from Intel, the company plans to integrate Thunderbolt 3.0 directly onto their processor. This will likely make them the first to support USB4, a factor which will place AMD at a disadvantage until they can offer USB4 support in their devices. 

In a single move, Intel has ensured that their Thunderbolt standard will be adopted by every major manufacturer, while also giving them a clear advantage over their competition when it comes to implementing USB4 support. Thanks to Thunderbolt much of the software/hardware ecosystem for USB4 has already been built, which means that we should see USB4 devices relatively quickly. ',
                'source'      => 'https://www.overclock3d.net/news/input_devices/thunderbolt_3_becomes_usb4_-_intel_contributes_thunderbolt_3_to_create_usb4_specification/1',
                'user_id'     => 6,
                'category_id' => 2,
                'created_at'  => '2019-03-05 16:09:00',
            ],
            [
                'title'       => 'Microsoft is testing Skype group calls for up to 50 people',
                'slug'        => 'microsoft-is-testing-skype-group-calls-for-up-to-50-people',
                'content'     => 'Skype conference calls could be about to get a whole lot busier. Microsoft is planning to bump up the maximum number of group call participants from 25 to 50 (18 more than can fit into a Group FaceTime call). The audio and video buttons will be enabled for larger groups, so people can more easily mute their microphones or turn on/off their webcam.

So you don\'t bother people who can\'t join a call too much, Skype also plans to make ringing optional. It will instead send a notification to group call participants, though you can still ask Skype to ring people if they don\'t respond. These features are available as of today for beta testers, and they\'ll likely roll out more broadly later.',
                'source'      => 'https://www.engadget.com/2019/03/15/skype-group-call-notifications-microsoft-beta/',
                'user_id'     => 6,
                'category_id' => 3,
                'created_at'  => '2019-03-16 10:59:00',
            ],
            [
                'title'       => '30th Anniversary of the World Wide Web',
                'slug'        => '30th-anniversary-of-the-world-wide-web',
                'content'     => '“Vague but exciting.”

This was how Sir Tim Berners-Lee’s boss responded to his proposal titled “Information Management: A Proposal,” submitted on this day in 1989, when the inventor of the World Wide Web was a 33-year-old software engineer. Initially, Berners-Lee envisioned "a large hypertext database with typed links,"named  “Mesh,” to help his colleagues at CERN (a large nuclear physics laboratory in Switzerland) share information amongst multiple computers.

Berners-Lee’s boss allowed him time to develop the humble flowchart into a working model, writing the HTML language, the HTTP application, and WorldWideWeb.app— the first Web browser and page editor. By 1991, the external Web servers were up and running.',
                'source'      => 'https://www.google.com/doodles/30th-anniversary-of-the-world-wide-web',
                'user_id'     => 6,
                'category_id' => 5,
                'created_at'  => '2019-03-12 19:30:00',
            ],
            [
                'title'       => 'World of Warcraft uses DirectX 12 running on Windows 7',
                'slug'        => 'world-of-warcraft-uses-directx-12-running-on-windows-7',
                'content'     => 'Blizzard added DirectX 12 support for their award-winning World of Warcraft game on Windows 10 in late 2018. This release received a warm welcome from gamers: thanks to DirectX 12 features such as multi-threading, WoW gamers experienced substantial framerate improvement. After seeing such performance wins for their gamers running DirectX 12 on Windows 10, Blizzard wanted to bring wins to their gamers who remain on Windows 7, where DirectX 12 was not available.',
                'source'      => 'https://devblogs.microsoft.com/directx/world-of-warcraft-uses-directx-12-running-on-windows-7/',
                'user_id'     => 8,
                'category_id' => 3,
                'created_at'  => '2019-03-13 17:20:00',
            ],
            [
                'title'       => '4A Games Releases Metro Exodus\' PC System Requirements',
                'slug'        => '4a-games-releases-metro-exodus-pc-system-requirements',
                'content'     => 'The Metro series has always been known for having monstrous PC system requirements, at least for those who want to play the game at its highest settings. 

The PC system requirements for Metro Exodus are here, providing PC gamers with the opportunity to see how scalable the 4A Engine can be, scaling from low-powered consoled like the Xbox One to bleeding edge PCs with flagship level hardware like the Nvidia RTX 2080 Ti. 

For their PC system requirements, 4A Games have provided us with system hardware specs for 1080p 30FPS, 1080p 60FPS, 1440p 60FPS and 4K 60FPS, moving from Minumum specs to Recommended, High and Ultra hardware recommendations respectively. The game will support Nvidia\'s RTX technologies, but today\'s specs only account for the game without Nvidia\'s RTX technologies enabled. 

In the coming days, 4A Games will release hardware requirements for Nvidia RTX ray tracing, which are expected to be significantly higher than what you will see below.',
                'source'      => 'https://www.overclock3d.net/news/software/4a_games_releases_metro_exodus_pc_system_requirements/1',
                'user_id'     => 6,
                'category_id' => 4,
                'created_at'  => '2019-01-25 20:30:00',
            ],
            [
                'title'       => 'Mozilla Firefox and Microsoft Edge Hacked at Pwn2Own',
                'slug'        => 'mozilla-firefox-and-microsoft-edge-hacked-at-pwn2own',
                'content'     => 'Mozilla Firefox and Microsoft Edge were both hacked in the second day of the Pwn2Own hacking contest, and in the case of the Windows 10 browser, researchers came up with a super-complex and clever approach to escape a virtual machine and get inside the host.

Amat Cama and Richard Zhu of Fluoroacetate were the first to attempt to break into Mozilla Firefox using a JIT Bug and an out-of-bounds write in the Windows kernel.

This technique allowed to run code at system level, technically taking over the machine completely after pointing Firefox to a crafted website. The two were received a price of $50,000.',
                'source'      => 'https://news.softpedia.com/news/mozilla-firefox-and-microsoft-edge-hacked-at-pwn2own-525396.shtml#sgal_0',
                'user_id'     => 6,
                'category_id' => 5,
                'created_at'  => '2019-03-23 15:00:00',
            ],
            [
                'title'       => 'Samsung Galaxy Note10+ 5G shows up on 3C with 25W charger',
                'slug'        => 'samsung-galaxy-note10-5g-shows-up-on-3c-with-25w-charger',
                'content'     => 'Samsung is looking to release a trio of Galaxy Note10 models - normal, plus sized and a 5G version of the plus. A 3C certification sheet is here to confirm the charging capabilities of the 5G version.

The listing mentions a phone with a model number SM-N9760 and a 25W charger that comes along with it. This is the same speed as the Note10+, although that one will be able to reach 45W with an optional faster charger. Odds are the 5G version will be in the same boat, although given its expected higher price tag it\'s disappointing that you\'d still need to pay extra to get the fastest possible charging speeds.

August 7 is pretty close so we will know for sure soon enough.',
                'source'      => 'https://www.gsmarena.com/samsung_galaxy_note10_5g_shows_up_on_3c_with_25w_charger-news-38384.php',
                'user_id'     => 3,
                'category_id' => 1,
                'created_at'  => '2019-07-29 15:00:00',
            ],
        ]);
    }
}
