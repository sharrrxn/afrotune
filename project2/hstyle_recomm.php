<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content ="IE=edge">
	<meta name ="viewport" content = "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container2{
        text-align:center;
        width:900px;
        margin:auto;
         }   
        .container1{
            background: #fff;
            width:900px;
            margin: auto;
            text-align: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
        }
        a:link, a:visited {
            background-color: #483C32;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
       }
       a:hover, a:active {
        background-color: #C4A484;
        }

        .oval{
            display: none;
            padding:15px;
            border:1px solid #f4f4f4;
            width:480px;
            margin:auto;
        }

        .square{
            display: none;
            padding:15px;
            border:1px solid #f4f4f4;
            width:480px;
            margin:auto;
        }
        
        .round{
            display: none;
            padding:15px;
            border:1px solid #f4f4f4;
            width:480px;
            margin:auto;
        }

        .diamond{
            display: none;
            padding:15px;
            border:1px solid #f4f4f4;
            width:480px;
            margin:auto;
        }

        .heart{
            display: none;
            padding:15px;
            border:1px solid #f4f4f4;
            width:480px;
            margin:auto;
        }

    </style>
</head>
<body>
<?php include "./navBar.php" ?>
    </br>
    <div class="container2">
    <h4 class="title1">Hair Style Recommender</h4>
       <div class="para1"><p>We want you feeling the  absolute best about your hair and foster an environment where you can feel comfortable to access knowledge and document your hair care journey. Hair care is very important and we believe that your beautiful hair deserves maximum attention! </p>
           <p class="p1">We know how much of pain it is to look after your hair especially due to the climate we have in Ireland, so we have a number of protective hairstyles displayed to assist you! </p>
           <p>Select the headshape that you think best appeals to you!</p>
        </div>
    </div>
<div class="container1">
    </br>
    <div id="menu-bar">
        <p>
            <a onclick="toggle_faces('oval')" href="javascript:void(0);">Oval</a>
            <a onclick="toggle_faces('square')" href="javascript:void(0);">Square</a>
            <a onclick="toggle_faces('round')" href="javascript:void(0);">Round</a>
            <a onclick="toggle_faces('diamond')" href="javascript:void(0);">Diamond</a>
            <a onclick="toggle_faces('heart')" href="javascript:void(0);">Heart</a>
            </br>
        </p>
    </br>
    </div>
    <div>
        <img src="headshape.png" alt="Headshape">
    </div>
    </br>
    <div id="oval" class="oval">
        <h5>OVAL FACE</h5>
        <img src="oval.png" alt="Headshape">
        <p>An oval face shape is thought to be the most frequent of them all, with a middle-part complementing it because of how it highlights features while displaying symmetry. Shoulder length styles lets you to set the stage for everything that makes your face gorgeous, whether it's with a straight or brazilian curly shoulder-length bob, a blunt cut or textured – you can pretty much rock anything.</p>
    </div>
    </br>
    <div id="square" class="square">
        <h5>SQUARE FACE</h5>
        <img src="square.png" alt="Headshape">
        <p>This face shape loves curls and waves, and it's simple to understand why. A square-shaped face's chiseled bone structure might benefit from some softening. A wavy short cut or long bouncy curls will aid in this endeavor. Curls or waves, especially if the characteristics are sharp, are a sure-fire method to communicate them! Feel free to add splashes of color or go all out. If you want to sport lengthy locs, use flexi-rods to enhance curls.</p>
    </div>
    </br>
    <div id="round" class="round">
        <h5>ROUND FACE</h5>
        <img src="round.png" alt="Headshape">
        <p>It might be difficult for us round-faced ladies to acquire the sleek looks of our oval or oblong-faced counterparts. With a side part and a high-swept bang, you may give dimension to your face and lengthen your form. These accents look great with a pixie cut or an updo. They give emphasis to your jaw, cheekbones, and hairline, believe it or not. The height of the hair, especially when matched with a pompadour, produces a longer facial shape to complement the ovals and oblongs.</p>
    </div>
    </br>
    <div id="diamond" class="diamond">
        <h5>DIAMOND FACE</h5>
        <img src="diamond.png" alt="Headshape">
        <p>Diamond-shaped faces, despite their diminutive size, may create just as big of an impression. With the latest cornrow obsession, it's easy to overlook the basic yet seductive fishtail. A fishtail or mermaid braid adds length while also emphasising your hairline, jawline, and chin by pulling all of your hair to one side. A side-swept braid may be the perfect finishing touch for a casual or formal outfit (especially when paired with accessories like gold or studded hairpins).</p>
    </div>
    </br>
    <div id="heart" class="heart">
        <h5>HEART FACE</h5>
        <img src="heart.png" alt="Headshape">
        <p>Your gorgeous form is that of a heart if your face is broadest across the forehead and comes to a sharp point at the chin. This facial shape, often known as the inverted triangle, hits home runs every time it comes up to bat. Bangs, whether blunt, textured, or side-swept, can mask the length and/or depth of the forehead and bring emphasis to the eyes. Wavy long locks will lengthen your face, while a jaw-length bob will emphasize your sharp chin. You could also wear your hair half-up to frame your face while attracting attention away from your brow.</p>
    </div>
    </br>
</div>
   <!-- toggling of divs bases on clicking button -->
   <script>
        function toggle_faces(div_name)
        {
            if(document.getElementById(div_name).style.display == 'none')
            document.getElementById(div_name).style.display = 'block';

            else
            document.getElementById(div_name).style.display = 'none';

        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>