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

$item = new Item;
$item->price = '15.99';
$item->name = "GIANT FIST KOOZIE";
$item->description = "This has to be the coolest koozie ever made! Keep your drink cold in a giant foam fist! Simply insert your drink in the Fist and then place your hand inside. The Koozie is easy to grip and will persuade everyone to stay away from your Drink. You can use your new Giant Fists to terrorize the neighborhood, start an arm wrestling career, or ware-in new mattresses with a beat down session.";
$item->image = "/img/uploads/giantFist.jpg";
$item->user_id = 3;
$item->save();

$item = new Item;
$item->price = '13.99';
$item->name = "Yodeling Pickle";
$item->description = "If you've been looking for the perfect item to throw your money away on, your search is over. You can't possibly need this. You can't possibly use this. In fact, it is unlikely that you even WANT this. And that's why you should buy the Electronic Yodeling Pickle. You only live once, and we think it's important to do something absolutely ridiculous once in awhile. And what can be more ridiculous than a yodelling pickle? ";
$item->image = "/img/uploads/pickle.jpg";
$item->user_id = 4;
$item->save();

$item = new Item;
$item->price = '25.99';
$item->name = "Mr. Potato Yoda";
$item->description = "What happens when a Jedi eats french fries? He turns into a Potato, that's what! This 3 inch Potato Head is the great YODA. Figure is great for display and comes with removable components, such as clothes and light saber.";
$item->image = "/img/uploads/yoda.jpg";
$item->user_id = 5;
$item->save();

$item = new Item;
$item->price = '25.99';
$item->name = "Mugging Mug";
$item->description = "Gimme all your teabags! Cooperate, and this Mugga Mug might become your favourite cup. It quite hard to take this guy's hard crime cover at face value when he is so handy in the kitchen. His cute balaclava will even keep your hot drink hotter for longer! Not just great as a gift for your quirky friends, the Mugga Mug would be the perfect addition to your own mug collection.";
$item->image = "/img/uploads/mug.jpg";
$item->user_id = 2;
$item->save();

$item = new Item;
$item->price = '3.99';
$item->name = "BACON LIP BALM";
$item->description = "The most delicious flavor in the world, exactly where it belongs... in your mouth! This Lip Balm may not stay on your Lips for long but you can always re-apply. It harbors the scent of fresh, smoked, Bacon and will have you constantly craving breakfast. You'll be sniffing the air like the dog from the \"Beggin' Strips\" commercials and there's no shame in that. Bacon holds some crazy power and not many people can explain it, not even Bacon scientists. People bow before Bacon and Bacon controls the masses. Just take a look at the lines outside most buffets... it's all Bacon's fault. Take back some of that power by succumbing to Bacon on your lips. Okay, that doesn't make much sense but either does Bacon Lip Balm.";
$item->image = "/img/uploads/bacon-balm.jpg";
$item->user_id = 3;
$item->save();

$item = new Item;
$item->price = '499.99';
$item->name = "DVD Rewinder";
$item->description = "Times have been tough with the missus recently. We were always fighting about every little thing, who's turn it was to wash the dishes, who was going to mow the lawn, whether or not I was cheating on her with her sister (I was). And on the rare occasion we had the time to watch a movie together we would fight about who would rewind the DVD. My marriage was on the brink of collapse.\nEnter \"DVD Rewinder\"! Rewinding our movies is no longer tedious, but an enjoyable experience to share with my wife. The amazing space age technology works like a charm and DVDs rewind in a matter of minutes, compared to the hours it used to take to manually spin the disc backwards thousands of times.\nSure, sometimes my wife still argues that it makes more sense for me to get a job than for her to get 2 (I mean seriously it averages out to 1 job per person either way, WHAT is the big deal?) but at the end of the day, at least we can watch Glitter without an argument. DVD Rewinder, I owe you my marriage and my life.";
$item->image = "/img/uploads/dvdrewinder.jpg";
$item->user_id = 2;
$item->save();

$item = new Item;
$item->price = '95950';
$item->name = "Elephant Camo";
$item->description = "Learn from the mammoth mistakes of your past and don’t let a lack of subtlety be your downfall. The Proporta Elephant Camouflage Kit uses our patented Clear Blue Sky Disappearing Technology to help you literally vanish into thin air, evading dangerous predators, tourists and boring guests at tea and bun parties. Monsoon-tested waterproof blue and white paint (also available in jungle green)* Includes masking tape (40 metres) Ideal for eavesdropping on rhinos * Don’t be tempted by rival products which use cheaper, water-based paint and can be fatal in crouching-tiger-heavy-rain scenarios. Buy now and get a currant bun absolutely free! Extinction Avoidance – from Proporta “Those who cannot remember the past are condemned to repeat it.” – George Santayana.";
$item->image = "/img/uploads/elephant-camo.jpg";
$item->user_id = 1;
$item->save();

$item = new Item;
$item->price = '29.99';
$item->name = "Privacy Scarf";
$item->description = "Just in case you haven’t come across the Screen Privacy Scarf before and are concerned about nosy bystanders taking a gander at what’s hot on your screen don’t worry! Because you can take comfort in knowing this brainchild invention will keep your data private. The past and future woven into one inconspicuous device by a London based designer means that on the train, around the home or in the work place your display will remain privy. With the Screen Privacy Scarf fashion and technology meet in the middle and the lucky owners will be the envy of any clandestine individual!
		Different sizes of the scarf are available to cater for mobiles and tablets.";
$item->image = "/img/uploads/privacy-scarf.jpg";
$item->user_id = 4;
$item->save();