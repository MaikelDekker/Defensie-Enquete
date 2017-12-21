<?php
/*
Nodige aanpassingen:
- de <b>/<br>/<hr> enz zoveel mogelijk verwerken in css, labels gebruiken, etc.
- $educationEMV/$educationPotom samenvoegen maar als losse optgroup label zoals het nu is.
- Wel of geen 'voorbeeld vraag' - op dit moment weg gecomment omdat introductie voldoende info geeft(?)
- Checkbox vragen moeten uit database kunnen worden gehaald en verwerkt, maar geen idee hoe.
- In de enquete_footer is voor elke vraag een nieuw stukje javascript code die herhaald, dit uiteindelijk aanpassen/optimaliseren.
*/ ?>

<img src="<?php echo base_url(); ?>images/logo-flat.png" class="logo_small"/>
<h2>Week monitor - Fieldlab MOC</h2>
<h3>Versie <?php echo strtolower(strftime('%B %Y', time())); ?></h3>
<hr>
<p><b>Beste Cursist,</b></p>
<p>Het is van groot belang dat je deze vragenlijst naar waarheid invult. Neem daar de tijd voor. Daarmee vergroot je je kans om marinier te worden. Je zult nooit worden afgerekend op je antwoorden. Iedere week kun je je anders voelen. Laat dit dan ook zien in je antwoorden.</p>
<p><b>Het Fieldlab MOC</b></p>
<hr><br/>
<b><font color="red"><center><?php echo validation_errors(); ?></center></font></b>
<form action="" method="post">
  <b>Volledige naam<br/></b>
  <input type="text" class="enqueteTextinput" name="enqueteFullname" value="" required/>

  <b><br/><br/>Opleiding/blok<br/></b>
  <select name="enqueteEducation" class="enqueteSelectinput" required/>
    <optgroup label="EMV Blokken">
      <?php foreach ($educationEMV as $eduBlocks): ?>
        <option value="<?php echo $eduBlocks['id']; ?>"><?php echo $eduBlocks['educationBlocks']; ?></option>
      <?php endforeach; ?>
    </optgroup>
    <optgroup label="POTOM">
      <?php foreach ($educationPotom as $eduBlocks): ?>
        <option value="<?php echo $eduBlocks['id']; ?>"><?php echo $eduBlocks['educationBlocks']; ?></option>
      <?php endforeach; ?>
    </optgroup>
  </select>

  <b><br/><br/>Klas<br/></b>
  <input type="text" name="enqueteClass" class="enqueteTextinput" value="" required/>

  <b><br/><br/>Psoft nummer<br/></b>
  <input type="text" name="enquetePsoftnr" class="enqueteTextinput" value="V0" placeholder="V0" required/>

  <br/><br/><hr>

<p class="surveyIntroduction">Vanaf de volgende pagina krijg je allemaal vragen en stellingen. Je kunt het daar mee <b>eens</b> zijn of <b>oneens</b> zijn: als je het er volledig mee eens bent schuif je de balk naar rechts en is het een <b>10</b>, bij volledig mee oneens of totaal niet van toepassing schuif je de balk naar links en is het een <b>0</b>.</p>
<?php /*<div class="question"><b>Voorbeeld:<br/>Mijn vriendin wil niet dat ik marinier word</b><br/><span class="rating">4</span></div>
<input class="slider0" type="range" min="0" max="10" value="4" disabled/>
<span class="surveyHelpLeft">Volledig mee oneens</span> <span class="surveyHelpRight">Volledig mee eens</span> */?>
<p class="surveyHint">Het invullen kost je ongeveer 5 minuten.</p>

<hr>

<?php foreach ($questions as $question): ?>
<?php if($question['type'] == 0) /*Slider vragen*/ { ?>
  <div class="question"><?php echo $question['id']; ?>. <b><?php echo $question['questions']; ?></b><br/><span class="rating<?php echo $question['id']; ?>">5</span></div>
  <input class="slider<?php echo $question['id']; ?>" name="question<?php echo $question['id']; ?>" type="range" min="0" max="10" value="5"/>
  <span class="surveyHelpLeft">Volledig mee oneens</span> <span class="surveyHelpRight">Volledig mee eens</span>
<?php } else if($question['id'] == 16) /*Checkbox vragen | Hier moet iets beters voor komen... */ { ?>
  <div class="question"><?php echo $question['id']; ?>. <b><?php echo $question['questions']; ?></b><br/>
  <select name="question16" class="enqueteSelectinput" required/>
    <option value="0">Nee, ik heb hier geen behoefte aan.</option>
    <option value="1">Ja, ik wil graag persoonlijk advies van LTZ2OC van der Schee.</option>
  </select>
<?php } else if($question['id'] == 17) /*Checkbox vragen | Hier moet iets beters voor komen... */ { ?>
  <div class="question"><?php echo $question['id']; ?>. <b><?php echo $question['questions']; ?></b><br/>
  <select name="question17" class="enqueteSelectinput" required/>
    <option value="0">Niet van toepassing</option>
    <option value="1">De geestelijk verzorger</option>
    <option value="2">De arts</option>
    <option value="3">Mevr. Eerenstein</option>
    <option value="4">Het Fieldlab</option>
  </select>
<?php } else if($question['type'] == 2) /*Open vragen*/ { ?>
  <div class="question"><?php echo $question['id']; ?>. <b><?php echo $question['questions']; ?></b><br/>
  <textarea name="question<?php echo $question['id']; ?>" class="surveyQuestionOpen"/></textarea>
<?php } ?>
<?php endforeach; ?>

<input type="submit" name="submit" class="enqueteSubmit" value="Gegevens opslaan">
</form>