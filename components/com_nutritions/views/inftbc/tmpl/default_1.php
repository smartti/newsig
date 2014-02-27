<?php defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
	
<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="tbcForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="tbcForm">
<fieldset>
    <legend>Acciones</legend>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('tbcForm').submit();"/>
            </td>
            <td>
                &nbsp;
            </td>
            <td style="width: 25%;">
                <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('tbcForm').submit();"/>
            </td>
            <td style="width: 25%;">
                <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('tbcForm').submit();"/>
            </td>
        </tr>
    </table>
</fieldset>

<fieldset>
               <div class="container">

			<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">About</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Services</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Work</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Contact</label>
            
			    <div class="clear-shadow"></div>
			
		        <div class="content">
			        <div class="content-1">
						 <div class="clear-shadow"></div>
			<h2>About us</h2>
                      		    </div>
			        <div class="content-2">
						<h2>Services</h2>
                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
						<h3>Excellence</h3>
						<p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
				    </div>
			        <div class="content-3">
						<h2>Portfolio</h2>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
						<h3>Examples</h3>
						<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
				    </div>
				    <div class="content-4">
						<h2>Contact</h2>
                        <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.</p>
						<h3>Get in touch</h3>
						<p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
				    </div>
		        </div>
			</section>
        </div>
</fieldset>
        <input type="hidden" name="option" value="com_nutritions" />
        <input type="hidden" name="task" id="newTask" value="" />
        <input type="hidden" name="controller" value="inftbc" />
        <input type="hidden" name="tbcId" value="<?php echo $this->inftbc->id_tbc; ?>" />
</form>