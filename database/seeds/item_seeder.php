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
