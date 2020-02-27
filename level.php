<?php
class Level{
    public $lvl;
    public $lvlHead;
    public $type;
    public $question;
    public $bgImg;
    public $color;
    public $fontweight;
    public $fontsize;
    public $key;
    public $questionImg;
    public $class = "prevent_sel";
}


$lvl1 = new Level();
$lvl1->lvlHead = "Level 1: The Journey Begins";
$lvl1->lvl = "1";
$lvl1->type = "image";
$lvl1->question = "Solve the puzzle and find the hidden word using the highlighted boxes-";
$lvl1->bgImg = "url('assets/img/qbg1.jpg')";
$lvl1->key = "bitesys";
$lvl1->questionImg = array("Q1.png");
$lvl1->color = "black";
$lvl1->fontweight = "800";
$lvl1->fontsize = "20px";

$lvl2 = new Level();
$lvl2->lvlHead = "Level 2: Maze of Riddles - 1st Floor";
$lvl2->lvl = "2";
$lvl2->type = "image";
$lvl2->question = "Find the sports personality.";
$lvl2->bgImg = "url('assets/img/qbg10.png')";
$lvl2->key = "roger federer";
$lvl2->questionImg = array("q101.png","q102.png","q103.png");
$lvl2->color = "black";

$lvl3 = new Level();
$lvl3->lvlHead = "Level 3: Maze of Riddles - 2nd Floor";
$lvl3->lvl = "3";
$lvl3->type = "basic";
$lvl3->question = "I can bend it like Beckham with my left foot but I always get left back in the squad. Guess the player?";
$lvl3->bgImg = "url('assets/img/qbg28.jpg')";
$lvl3->key = "roberto carlos";
$lvl3->questionImg =  null;
$lvl3->color = "white";

$lvl4 = new Level();
$lvl4->lvlHead = "Level 4: Maze of Riddles - 3rd Floor";
$lvl4->lvl = "4";
$lvl4->type = "image";
$lvl4->question = "Find me";
$lvl4->bgImg = "url('assets/img/qbg4.jpg')";
$lvl4->key = "fidel castro";
$lvl4->questionImg = array("q41.png","q42.jpg");
$lvl4->color = "white";

$lvl5 = new Level();
$lvl5->lvlHead = "Level 5";
$lvl5->lvl = "5";
$lvl5->type = "basic";
$lvl5->question = "Our women are as efficient as our men at soccer. Guess the country?";
$lvl5->bgImg = "url('assets/img/qbg30.jpg')";
$lvl5->key = "germany";
$lvl5->questionImg = null;
$lvl5->color = "white";

$lvl6 = new Level();
$lvl6->lvlHead = "Level 6: ";
$lvl6->lvl = "6";
$lvl6->type = "basic";
$lvl6->question = "I have long legs and neck. There was a movie about me a few years ago and another one will be out soon. When a German is surprised, they ask someone to fry me. Who am I?";
$lvl6->bgImg = "url('assets/img/qbg6.jpg')";
$lvl6->key = "stork";
$lvl6->questionImg = null;
$lvl6->color = "black";
$lvl6->class = "";

$lvl7 = new Level();
$lvl7->lvlHead = "Level 7: ";
$lvl7->lvl = "7";
$lvl7->type = "basic";
$lvl7->question = "I am the possessor of power but often fought someone who always said 'Power'. Taz devil and I have something in common. Many kids loved me and had my face tattooed on themselves. You might have missed me all these years but you will soon be able to see my three dimensional self. Who am I?";
$lvl7->bgImg = "url('assets/img/qbg7.jpg')";
$lvl7->key = "shaktimaan";
$lvl7->questionImg = null;
$lvl7->color = "white";

$lvl8 = new Level();
$lvl8->lvlHead = "Level 8: ";
$lvl8->lvl = "8";
$lvl8->type = "image";
$lvl8->question = "Find the show";
$lvl8->bgImg = "url('assets/img/qbg8.jpg')";
$lvl8->key = "boruto";
$lvl8->questionImg = array("q81.jpeg","q82.jpeg","q83.jpeg");
$lvl8->color = "white";

// $lvl8 = new Level();
// $lvl8->lvl = "8";
// $lvl8->type = "custom";
// $lvl8->key = "golden key";
// $lvl8->filename = "levels/keys_lvl.php";

$lvl9 = new Level();
$lvl9->lvlHead = "Level 9";
$lvl9->lvl = "9";
$lvl9->type = "basic";
$lvl9->question = 'X and Y played the lead roles in a TV series after having played the role of pilots in a film.  Name the TV series. (Clue: This film was a parody of a feature film that was released in 1986)';
$lvl9->bgImg = "url('assets/img/qbg42.jpg')";
$lvl9->key = "two and a half men";
$lvl9->questionImg = null;
$lvl9->color = "white";

// $lvl9 = new Level();
// $lvl9->lvl = "9";
// $lvl9->type = "custom";
// $lvl9->key = "death";
// $lvl9->filename = "levels/shadowHidden_lvl.php";

$lvl10 = new Level();
$lvl10->lvlHead = "Level 10:";
$lvl10->lvl = "10";
$lvl10->type = "basic";
$lvl10->question = "My great grandfather was a famous Indian personality who also wrote a lot, and his collected works have more than 50000 pages. Being the great-grandson of this personality, I’ve acted a movie a few decades back. Find me and the movie. ";
$lvl10->bgImg = "url('assets/img/qbg2.jpg')";
$lvl10->key = "tushar gandhi hey ram";
$lvl10->questionImg = null;
$lvl10->color = "white";



// $lvl10 = new Level();
// $lvl10->lvl = "10";
// $lvl10->type = "custom";
// $lvl10->key = "s vyfo iye";
// $lvl10->filename = "levels/title_lvl.php";

$lvl11 = new Level();
$lvl11->lvlHead = "Level 11: Valley of Images - 1st floor";
$lvl11->lvl = "11";
$lvl11->type = "image";
$lvl11->question = "Find the TV show";
$lvl11->bgImg = "url('assets/img/qbg11.png')";
$lvl11->key = "the simpsons";
$lvl11->questionImg = array("q111.png","q112.png","q113.png","q114.png","q115.png");
$lvl11->color = "black";

$lvl11_1 = new Level();
$lvl11_1->lvlHead = "Level 12: Valley of Images - 2nd FLoor";
$lvl11_1->lvl = "12";
$lvl11_1->type = "image";
$lvl11_1->question = "Find the movie";
$lvl11_1->bgImg = "url('assets/img/qbg12.jpg')";
$lvl11_1->key = "cast away";
$lvl11_1->questionImg = array("q121.png","q122.jpg","q123.png");
$lvl11_1->color = "white";

$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = 'Childhood memories...';
$lvl11_2->bgImg = "url('assets/img/qbg49.jpg')";
$lvl11_2->key = "need for speed";
$lvl11_2->questionImg = array("q491.jpg","q492.jpg","q493.jpg","q494.jpg");
$lvl11_2->color = "white";

/*$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13: Valley of Images - 3rd FLoor";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = "Connect the images and find the personality";
$lvl11_2->bgImg = "url('assets/img/whitebg.jpg')";
$lvl11_2->key = "larry page";
$lvl11_2->questionImg = array("kitty.jpg","102.jpg","103.jpg","aero.jpg");
$lvl11_2->color = "black";*/

$lvl11_3 = new Level();
$lvl11_3->lvlHead = "Level 14";
$lvl11_3->lvl = "14";
$lvl11_3->type = "basic";
$lvl11_3->question = 'This show was created by twin brothers and the music was composed by two members of an electronic band that was formed in Texas.  Name the band.';
$lvl11_3->bgImg = "url('assets/img/qbg46.jpg')";
$lvl11_3->key = "survive";
$lvl11_3->questionImg = null;
$lvl11_3->color = "white";

$lvl12 = new Level();
$lvl12->lvlHead = "Level 15";
$lvl12->lvl = "15";
$lvl12->type = "basic";
$lvl12->question = "I’m a phrase. One part of me represents guest appearance, another part a city. Name the character which mentions me.";
$lvl12->bgImg = "url('assets/img/qbg15.jpg')";
$lvl12->key = "sherlock holmes";
$lvl12->questionImg = null;
$lvl12->color = "white";

$lvl13 = new Level();
$lvl13->lvlHead = "Level 16";
$lvl13->lvl = "16";
$lvl13->type = "basic";
$lvl13->question = "A 10 digit number where the 1st digit represents the number of 0’s in the number, 
2nd digit represents 1’s in the number and so on till 10th digit that represents the number of 9’s in the number. What is the number?";
$lvl13->bgImg = "url('assets/img/qbg29.jpg')";
$lvl13->key = "6210001000";
$lvl13->questionImg = null;
$lvl13->color = "black";

$lvl14 = new Level();
$lvl14->lvlHead = "Level 17: Valley of Images - 7th Floor";
$lvl14->lvl = "17";
$lvl14->type = "image";
$lvl14->question = "I have played along with the following players! Find me";
$lvl14->bgImg = "url('assets/img/qbg17.jpg')";
$lvl14->key = "diego forlan";
$lvl14->questionImg = array("q171.jpg","q172.jpg","q173.jpg","q174.jpg");
$lvl14->color = "black";

$lvl15 = new Level();
$lvl15->lvlHead = "Level 18: Valley of Images - 8th Floor";
$lvl15->lvl = "18";
$lvl15->type = "basic";
$lvl15->question = "I once survived brutal thrashing by warriors to secure the antidote in order to save a 16th century Anatomist who is related to this expression 43 47↑11 15→
Who am I??
";
$lvl15->bgImg = "url('assets/img/qbg18.jpg')";
$lvl15->key = "girolamo riario";
$lvl15->questionImg = null;
$lvl15->color = "white";

$lvl16 = new Level();
$lvl16->lvlHead = "Level 19: Valley of Images - 8th Floor";
$lvl16->lvl = "19";
$lvl16->type = "basic";
$lvl16->question = "I am a kid from a state in US which educated a guy who later won the Nobel Prize in Physiology.
Unfortunately, I died while I was riding my bicycle.
Who am I??";
$lvl16->bgImg = "url('assets/img/qbg19.jpg')";
$lvl16->key = "nicky hayden";
$lvl16->questionImg = null;
$lvl16->color = "white";

$lvl17 = new Level();
$lvl17->lvlHead = "Level 20";
$lvl17->lvl = "20";
$lvl17->type = "basic";
$lvl17->question = "Play fair. Honesty is the key to perseverance";
$lvl17->bgImg = "url('assets/img/qbg20.jpg')";
$lvl17->key = "qnkzoxsqnwbs";
$lvl17->questionImg = null;
$lvl17->color = "white";

/*$lvl17 = new Level();
$lvl17->lvlHead = "Level 19: Valley of Images - 9th Floor";
$lvl17->lvl = "20";
$lvl17->type = "endFinal";
$lvl17->question = "Connect the images<br>Hint: Tangle";
$lvl17->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl17->key = "";
$lvl17->questionImg = null;
$lvl17->color = "black";*/

$lvl18 = new Level();
$lvl18->lvlHead = "Level 21";
$lvl18->lvl = "21";
$lvl18->type = "basic";
$lvl18->question = "This world famous bar is situated at the southern end mostly at the bridge. Tension at the place depends on how people handle it.";
$lvl18->bgImg = "url('assets/img/qbg21.jpg')";
$lvl18->key = "whammy bar";
$lvl18->questionImg = null;
$lvl18->color = "white";

/*$lvl18 = new Level();
$lvl18->lvlHead = "Level 21: Valley of Images - 11th Floor";
$lvl18->lvl = "21";
$lvl18->type = "image";
$lvl18->question = "Connect the images";
$lvl18->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl18->key = "oneplus5t";
$lvl18->questionImg = array("18_a.jpg","18_b.jpg","18_c.jpg");
$lvl18->color = "black";*/

$lvl19 = new Level();
$lvl19->lvlHead = "Level 22: Valley of Images - 12th FLoor";
$lvl19->lvl = "22";
$lvl19->type = "basic";
$lvl19->question = "This state (region) which existed for 74 years was formed with the help of an alliance consisting of 2 people, in order to liberate itself from the dominion of another realm that lasted a little over 6 centuries. This state formed a base for the creation of a country which is currently existing and also is relatively new – founded after the first world war. Travel and Tourism is an integral part of this country which is amongst the leading economies. The Prime Minister of this country is closely related to its founder who in turn is related to the founder of the state. Name the state!";
$lvl19->bgImg = "url('assets/img/qbg22.jpg')";
$lvl19->key = "diriyah";
$lvl19->questionImg = null;
$lvl19->color = "white";

$lvl20 = new Level();
$lvl20->lvlHead = "Level 23: Valley of Images - 13th FLoor";
$lvl20->lvl = "23";
$lvl20->type = "image";
$lvl20->question ="Find the similarity between these 4 players!";
$lvl20->key = "jose mourinho";
$lvl20->bgImg = "url('assets/img/whitebg.jpg')";
$lvl20->questionImg = array("q23.png","q234.png","q232.png","q233.png");
$lvl20->color = "black";

$lvl21_1 = new Level();
$lvl21_1->lvlHead = "Level 24: Valley of Images - 13th FLoor";
$lvl21_1->lvl = "24";
$lvl21_1->type = "image";
$lvl21_1->question = "I am a football player. I am a defender capable of playing in 433 as well as 352 formations. During my tenure in a European club, my club’s captain retired who later took up the role of Vice President of the same club. Within a year of winning the Copa America, I scored in a European competition for a team whose partial logo is given below.
Who am I??";
$lvl21_1->bgImg = "url('assets/img/qbg24.jpg')";
$lvl21_1->key = "alvaro pereira";
$lvl21_1->questionImg = array("q24.png");
$lvl21_1->color = "white";

$lvl22_2 = new Level();
$lvl22_2->lvlHead = "Level 25";
$lvl22_2->lvl = "25";
$lvl22_2->type = "basic";
$lvl22_2->question = 'I am a Greek. I witnessed the fall of the city of Persepolis right in front of my eyes. I also starred in the movie directed by Terry Gilliam. I always have a large white star on my head.
Name Me!!';
$lvl22_2->bgImg = "url('assets/img/qbg25.jpg')";
$lvl22_2->key = "bucephalus";
$lvl22_2->questionImg = null;
$lvl22_2->color = "black";


$lvl21 = new Level();
$lvl21->lvlHead = "Level 26";
$lvl21->lvl = "26";
$lvl21->type = "image";
$lvl21->question = "Identify the character.";
$lvl21->bgImg = "url('assets/img/qbg26.jpg')";
$lvl21->key = "kaguya";
$lvl21->questionImg =  array("q261.jpg","q262.jpeg","q263.jpg","q264.jpeg");
$lvl21->color = "white";

$lvl22 = new Level();
$lvl22->lvlHead = "Level 27";
$lvl22->lvl = "27";
$lvl22->type = "basic";
$lvl22->question = "Guess the player who “offered” SAF a slice of pizza back in 2004? ";
$lvl22->bgImg = "url('assets/img/qbg27.jpg')";
$lvl22->key = "cesc fabregas";
$lvl22->questionImg =  null;
$lvl22->color = "white";

$lvl23 = new Level();
$lvl23->lvlHead = "Level 28: ";
$lvl23->lvl = "28";
$lvl23->type = "basic";
$lvl23->question = "I’m a cricketer. A part of my name is a famous cartoon character. One of my actions resulted in changing a sport by law. What was the act?";
$lvl23->bgImg = "url('assets/img/qbg3.jpg')";
$lvl23->key = "aluminium bat";
$lvl23->questionImg = null;
$lvl23->color = "white";



// $lvl24 = new Level();
// $lvl24->lvlHead = "Level 29";
// $lvl24->lvl = "29";
// $lvl24->type = "image";
// $lvl24->question = "Identify the link between these two pictures?";
// $lvl24->bgImg = "url('assets/img/whitebg.jpg')";
// $lvl24->key = "april bowlby";
// $lvl24->questionImg = null;
// $lvl24->color = "black";


$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Find the movie";
$lvl24->bgImg = "url('assets/img/qbg14.jpg')";
$lvl24->key = "minsara kanna";
$lvl24->questionImg = array("q141.png","q142.jpg","q143.png","q144.png");
$lvl24->color = "black";


/*$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Its not like the others";
$lvl24->bgImg = "url('assets/img/whitebg.jpg')";
$lvl24->key = "i luv encryption";
$lvl24->questionImg = array("29a.jpg","29c.png");
$lvl24->color = "black";*/

$lvl29 = new Level();
$lvl29->lvlHead = "Level 30";
$lvl29->lvl = "30";
$lvl29->type = "basic";
$lvl29->question = "I was going to change my present career and was about to start a new one as a driver, but my mom prevented and insisted me to continue in my present career.";
$lvl29->bgImg = "url('assets/img/qbg5.jpg')";
$lvl29->key = "a r rahman";
$lvl29->questionImg = null;
$lvl29->color = "white";



/*$lvl29 = new Level();
$lvl29->lvl = "30";
$lvl29->type = "custom";
$lvl29->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl29->filename = "levels/puzzle_lvl.php";*/

$lvl30 = new Level();
$lvl30->lvlHead = "Level 31";
$lvl30->lvl = "31";
$lvl30->type = "basic";
$lvl30->question = "I can hide myself by only wearing a cap? Guess the character?";
$lvl30->bgImg = "url('assets/img/qbg31.jpg')";
$lvl30->key = "joe goldberg";
$lvl30->questionImg = null;
$lvl30->color = "white";

/*$lvl30 = new Level();
$lvl30->lvl = "31";
$lvl30->type = "custom";
$lvl30->key = "";
$lvl30->filename = "levels/auth_lvl.php";*/

$lvlz = new Level();
$lvlz->lvlHead = "Level 32: Valley of Sounds: Find the musical instrument";
$lvlz->lvl = "32";
$lvlz->type = "basic";
$lvlz->question = "<audio controls=''>
<source src='assets/img/20b.mp3' type='audio/mpeg'/>
</audio>";
$lvlz->bgImg = "url('assets/img/qbg32.jpg')";
$lvlz->key = "theremin";
$lvlz->questionImg = null;
$lvlz->color = "white";

// $lvlz = new Level();
// $lvlz->lvlHead = "Level 32 : Valley of Sounds";
// $lvlz->lvl = "32";
// $lvlz->type = "basic";
// $lvlz->question = "25.5788|91.8933";
// $lvlz->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlz->key = "shillong";
// $lvlz->questionImg = null;
// $lvlz->color = "white";

$lvla = new Level();
$lvla->lvlHead = "Level 33";
$lvla->lvl = "33";
$lvla->type = "basic";
$lvla->question = "The lead characters from these two series are addicted to narcotics, solve cases and love music.  One is based on the other, who would that be?";
$lvla->bgImg = "url('assets/img/qbg33.jpg')";
$lvla->key = "gregory house";
$lvla->questionImg = null;
$lvla->color = "white";


$lvlb = new Level();
$lvlb->lvlHead = "Level 34";
$lvlb->lvl = "34";
$lvlb->type = "basic";
$lvlb->question = "gimlwp pn mfdgsutxamf bxgzlgmwzc<br>cipher";
$lvlb->bgImg = "url('assets/img/qbg34.jpg')";
$lvlb->key = "claude elwood shannon";
$lvlb->questionImg = null;
$lvlb->color = "black";

// $lvlb = new Level();
// $lvlb->lvlHead = "Level 34";
// $lvlb->lvl = "34";
// $lvlb->type = "basic";
// $lvlb->question = ".-- .... ---<br>Hint: Someone related to it";
// $lvlb->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlb->key = "tedros adhanom";
// $lvlb->questionImg = null;
// $lvlb->color = "white";

$lvlc = new Level();
$lvlc->lvlHead = "Level 35";
$lvlc->lvl = "35";
$lvlc->type = "image";
$lvlc->question = 'Identify the movie';
$lvlc->bgImg = "url('assets/img/qbg48.jpg')";
$lvlc->key = "moulin rouge";
$lvlc->questionImg = array("q481.jpg","q482.png","q483.jpg","q484.jpg");
$lvlc->color = "white";

$lvld = new Level();
$lvld->lvlHead = "Level 36";
$lvld->lvl = "36";
$lvld->type = "basic";
$lvld->question = "This character played the role of a bisexual in a series and later acted in another series where he/she was referred using a number.  
Guess the actor’s name.";
$lvld->bgImg = "url('assets/img/qbg36.jpg')";
$lvld->key = "olivia wilde";
$lvld->questionImg = null;
$lvld->color = "white";


$lvle = new Level();
$lvle->lvlHead = "Level 37";
$lvle->lvl = "37";
$lvle->type = "basic";
$lvle->question = "Originally invented by professor heylens, this is a positioning technique based on Jungian archetypes and freadian ego-id theory.";
$lvle->bgImg = "url('assets/img/qbg37.jpg')";
$lvle->key = "needscope";
$lvle->questionImg = null;
$lvle->color = "white";


$lvlf = new Level();
$lvlf->lvlHead = "Level 38";
$lvlf->lvl = "38";
$lvlf->type = "basic";
$lvlf->question = "<audio controls=''>
<source src='assets/img/audio.mp3' type='audio/mpeg'/>
</audio> Identify the breed of dog that is featured in this show";
$lvlf->bgImg = "url('assets/img/qbg38.jpg')";
$lvlf->key = "australian cobberdog";
$lvlf->questionImg = null;
$lvlf->color = "white";

// $lvlf = new Level();
// $lvlf->lvlHead = "Level 38";
// $lvlf->lvl = "38";
// $lvlf->type = "basic";
// $lvlf->question = ": ( ) {  : | :  &  } ; :     :'I ran here 1st'";
// $lvlf->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlf->key = "ibm system 360";
// $lvlf->questionImg = null;
// $lvlf->color = "black";

$lvlg = new Level();
$lvlg->lvlHead = "Level 39";
$lvlg->lvl = "39";
$lvlg->type = "basic";
$lvlg->question = 'The two creators of X found the inspiration of the name from creatures called “X” out of Jonathan Swift’s, “Gulliver’s Travels.”';
$lvlg->bgImg = "url('assets/img/qbg39.jpg')";
$lvlg->key = "yahoo";
$lvlg->questionImg = null;
$lvlg->color = "white";


$lvlh = new Level();
$lvlh->lvlHead = "Level 40";
$lvlh->lvl = "40";
$lvlh->type = "basic";
$lvlh->question = "You have 999 cakes, one of which is rotten. 
You would like to find out which cake is rotten by making a few men eat the cake. 
A cake can be divided into as many as 999 slices and if a man eats a slice of rotten cake, he would die in 10 mins.
A man can eat more than 1 slice. What are the minimum number of men that are required through which you’ll be able to find out the rotten cake in 10 mins?";
$lvlh->bgImg = "url('assets/img/qbg40.jpg')";
$lvlh->key = "10";
$lvlh->questionImg =  null;
$lvlh->color = "black";

$lvlEnd = new Level();
$lvlEnd->lvlHead = "Level 41";
$lvlEnd->lvl = "41";
$lvlEnd->type = "image";
$lvlEnd->question = "Find the director";
$lvlEnd->bgImg = "url('assets/img/whitebg.jpg')";
$lvlEnd->key = "vetrimaaran";
$lvlEnd->questionImg = array("q411.png","q412.png","q413.png","q414.png");
$lvlEnd->color = "black";

$lvli = new Level();
$lvli->lvlHead = "Level 42 ";
$lvli->lvl = "42";
$lvli->type = "image";
$lvli->question = "Find the product";
$lvli->bgImg = "url('assets/img/qbg9.jpg')";
$lvli->key = "samsung galaxy s10";
$lvli->questionImg = array("q91.png","q92.png","q93.png","q94.png");
$lvli->color = "white";



$lvlj = new Level();
$lvlj->lvlHead = "Level 43";
$lvlj->lvl = "43";
$lvlj->type = "image";
$lvlj->question = "Decode!!";
$lvlj->bgImg = "url('assets/img/qbg43.jpg')";
$lvlj->key = "byte";
$lvlj->questionImg =  array("q431.png","q432.png","q433.png","q434.png");
$lvlj->color = "white";

$lvlk = new Level();
$lvlk->lvlHead = "Level 44";
$lvlk->lvl = "44";
$lvlk->type = "basic";
$lvlk->question = 'An insect mutation was named after one of the main characters of this show.  Name the TV show. (Clue: The character name was also part of the former name of a famous TV series)';
$lvlk->bgImg = "url('assets/img/qbg44.jpg')";
$lvlk->key = "south park";
$lvlk->questionImg = null;
$lvlk->color = "white";

$lvln = new Level();
$lvln->lvlHead = "Level 45";
$lvln->lvl = "45";
$lvln->type = "basic";
$lvln->question = 'The host of this famous talk show divorced her spouse and they have an age difference of 15 years.  Name the show.';
$lvln->bgImg = "url('assets/img/whitebg.jpg')";
$lvln->key = "the ellen degeneres show";
$lvln->questionImg = null;
$lvln->color = "black";



$lvlaa = new Level();
$lvlaa->lvlHead = "Level 46";
$lvlaa->lvl = "46";
$lvlaa->type = "image";
$lvlaa->question = "die Meister!!";
$lvlaa->bgImg = "url('assets/img/qbg16.jpg')";
$lvlaa->key = "benson and hedges world championship 1985";
$lvlaa->questionImg = array("q161.jpeg","q162.jpeg","q163.jpeg","q164.jpeg");
$lvlaa->color = "white";



// $lvlaaa = new Level();
// $lvlaaa->lvlHead = "Level 47";
// $lvlaaa->lvl = "47";
// $lvlaaa->type = "image";
// $lvlaaa->question = "gimlwp pn mfdgsutxamf bxgzlgmwzc<br>cipher";
// $lvlaaa->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlaaa->key = "claude elwood shannon";
// $lvlaaa->questionImg =  array("xxx.jpg");
// $lvlaaa->color = "black";

$lvl48 = new Level();
$lvl48->lvlHead = "Level 47";
$lvl48->lvl = "47";
$lvl48->type = "basic";
$lvl48->question = "<audio controls=''>
<source src='assets/img/48_audio.mp3' type='audio/mpeg'/>
</audio> <br> Identify the actor in the audio clip";
$lvl48->bgImg = "url('assets/img/qbg47.jpg')";
$lvl48->key = "tim baltz";
$lvl48->questionImg = null;
$lvl48->color = "white";

$lvlaaa = new Level();
$lvlaaa->lvlHead = "Level 48";
$lvlaaa->lvl = "48";
$lvlaaa->type = "basic";
$lvlaaa->question = "X was born after India got its independence and got elected as the 997th leader of a group. X was also a part of an action thriller film directed by a software engineer whose short film has received an award. Name X, the short film and the action thriller.";
$lvlaaa->bgImg = "url('assets/img/qbg35.jpg')";
$lvlaaa->key = "james ronald gordon copeland mbe kaatchipizhai jagamae thandhiram";
$lvlaaa->questionImg = null;
$lvlaaa->color = "white";



$lvl_49 = new Level();
$lvl_49->lvlHead = "Level 49: Maze of Riddles - 2nd Floor";
$lvl_49->lvl = "49";
$lvl_49->type = "basic";
$lvl_49->question = "X, who retired from screen acting a few years ago, had appeared in a television series in which his/her character portrayal was partially inspired by the portrayal of a film character Y that was considered deliciously creepy perversity by some. Find X and Y.";
$lvl_49->bgImg = "url('assets/img/qbg13.jpg')";
$lvl_49->key = "jack gleeson commodus";
$lvl_49->questionImg = null;
$lvl_49->color = "white";



$lvl50 = new Level();
$lvl50->lvl = "50";
$lvl50->type = "custom";
$lvl50->bgImg = "url('assets/img/whitebg.jpg')";
$lvl50->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl50->filename = "levels/puzzle_lvl.php";

$endFinal = new Level();
$endFinal->lvl = "51";
$endFinal->type = "endFinal";
$endFinal->key = "qwe";
$endFinal->color = "white";






$levels = array("",$lvl1,$lvl2,$lvl3,$lvl4,$lvl5,$lvl6,$lvl7,$lvl8,$lvl9,$lvl10,$lvl11,$lvl11_1,$lvl11_2,$lvl11_3,
$lvl12,$lvl13,$lvl14,$lvl15,$lvl16,$lvl17,$lvl18,$lvl19,$lvl20,$lvl21_1,$lvl22_2,$lvl21,$lvl22,$lvl23,$lvl24,$lvl29,$lvl30,$lvlz,$lvla,$lvlb,$lvlc,$lvld,$lvle,$lvlf,
$lvlg,$lvlh,$lvlEnd,$lvli,$lvlj,$lvlk,$lvln,$lvlaa, $lvl48, $lvlaaa,$lvl_49,$lvl50, $endFinal);

?>
