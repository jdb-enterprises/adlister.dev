<?php

require_once __DIR__ . '/../../models/Items.php';

$item = new Item;
$item->price = '3.99';
$item->name = "Bacon Wallet";
$item->description = "This ultra crispy, perfectly thick Wallet will have you craving Bacon day in and day out. Wait, you do that anyway? Then this will have you breezing through the days with the smokey scent of Bacon in your nostrils as you whip out your id at the dmv, pay for food at the grocery, and hand out your business cards. Bacon is always in style.";
$item->image = "/img/uploads/baconWallet.jpg";
$item->user_id = 1;
$item->save();

$item = new Item;
$item->price = '10.99';
$item->name = "Wiper Glasses";
$item->description = "It's drizzling and you're having a hard time seeing in the mist but it's okay you'll just keep on trucking until that rain clears up. Wrong! That drizzle will turn into full blown torrential rains! Be prepared with these Wiper Glasses to Wipe the water away. They'll look great on you and keep your eyesight in tact. You can wear them swimming, sailboating, surfing and so much more! They may not really help in those full water-immersion situations but man, you'll look pretty awesome.";
$item->image = "/img/uploads/wiperGlasses.jpg";
$item->user_id = 2;
$item->save();

$item = new Item;
$item->price = '6.99';
$item->name = "Unicorn Horn for Cats";
$item->description = "The world is filled with Cats. All kinds of Cats: Calico Cats, Persian Cats, Abyssinian Cats, Mixed Cats, and more. However, the world hasn't seen a Unicorn Cat yet. Give them a vision of the most majestic creature eyes have ever set upon. The Unicorn Cat will amaze and captivate everyone. It will grace the litter box with exquisite beauty and chase after mice with magical prowess. Even mice will bow before the Unicorn Cat in the face of bodily harm. Now the secret is you blow up this Inflatable Unicorn Horn and place it over the Cat's ears. Everyone will be fooled by this simple costume accessory and your Cat will become a legend.";
$item->image = "/img/uploads/unicornCatHorn.jpg";
$item->user_id = 3;
$item->save();

$item = new Item;
$item->price = '10.99';
$item->name = "Beer Belt";
$item->description = "Never leave home without your BEERS again! This handy, far-too-useful Belt allows you to carry all your 12 oz. Beers as a mongoose would her children. You will be fully stocked, stacked, and packed for every party. Of course this Belt also fits regular sodas, water bottles, and coffee cups. The nylon, Camouflage print allows this device to blend in with any outfit and any environment.";
$item->image = "/img/uploads/beerBelt.jpg";
$item->user_id = 4;
$item->save();

$item = new Item;
$item->price = '10.99';
$item->name = "Mullet Headband";
$item->description = "Let your Hair blow in the wind as you roll down the highway in your Harley. This Mullet is an instant fix for anyone with Hair issues or in serious need of a cool new 'do. Get ready to rock the red, white, and blue Headband like a rockstar. It's a stretchable cotton Headband with brown curly locks in back.";
$item->image = "/img/uploads/instantMullet.jpg";
$item->user_id = 4;
$item->save();

$item = new Item;
$item->price = '19.98';
$item->name = "Turd Twister";
$item->description = "The Turd Twister is a complete kit for shaping your turd into amazing designs, and it comes with a hilarious instruction manual. It's the Ultimate Gift for the person who has everything, including a twisted sense of humor! The kit ships with our 10 most popular Turd Twisters. 10 laugh-inspiring, dishwasher-safe Turd Twisters, and that's just the beginning!In addition, you'll get the Amazing Manual called How to Twist Your Turds. This booklet, loaded with images explaining the art and science of Turd Twisting, will have everyone rolling on the floor laughing.";
$item->image = "/img/uploads/turdtwister.jpg";
$item->user_id = 1;
$item->save();

$item = new Item;
$item->price = '29.99';
$item->name = "Horse Mask";
$item->description = "Humorous and disturbing, our Horse Head Mask is sure to be an attention-grabber. This creepy latex mask measures 19 inches long and comes with a realistic fur mane that creates an even more disconcerting look. Embrace your equine alter ego for costume parties or any event where you would like to remain anonymous and creep people out at the same time. You could even use it on an enemy to reenact the classic horse head scene from the Godfather. They actually used a real horse head donated by a dog food company in the movie! Gross!";
$item->image = "/img/uploads/horseHead.jpg";
$item->user_id = 2;
$item->save();

$item = new Item;
$item->price = '7.99';
$item->name = "Mr. T Keychain";
$item->description = "Is someone giving you trouble? Is someone backtalking you? You need Mr. T on your side! Soon you'll be pitying the fool who starts jibber-jabbering! Mr. T is famously known for his role as Sgt. Bosco B.A. Baracus in the 1980s television series The A-Team and for wearing an excessive amount of gold jewelry. Just hearing his voice strikes fear and evokes respect!";
$item->image = "/img/uploads/mrtkeychain.jpg";
$item->user_id = 5;
$item->save();