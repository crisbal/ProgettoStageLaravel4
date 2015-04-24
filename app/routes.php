<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'StageController@index');
Route::get('/stage', 'StageController@mostraNuovoProgetto');
Route::get('/stage/{id}', 'StageController@mostraStage');

Route::get('/studenti', 'StudentiController@mostraStudenti');
Route::get('/studente/{id}', 'StudentiController@mostraSpecifico');

Route::get('/aziende', 'AziendeController@mostraAziende');
Route::get('/aziende/{id}', 'AziendeController@mostraSpecifica');


Route::get('/test', function() {

    $phpWord = new PhpWord();

    // Every element you want to append to the word document is placed in a section.
    // To create a basic section:
    $section = $phpWord->addSection();

    // After creating a section, you can append elements:
    $section->addText('Hello world!');

    // You can directly style your text by giving the addText function an array:
    $section->addText('Hello world! I am formatted.',
        array('name'=>'Tahoma', 'size'=>16, 'bold'=>true));

    // If you often need the same style again you can create a user defined style
    // to the word document and give the addText function the name of the style:
    $phpWord->addFontStyle('myOwnStyle',
        array('name'=>'Verdana', 'size'=>14, 'color'=>'ff0000'));
    $section->addText('Hello world! I am formatted by a user defined style',
        'myOwnStyle');

    // You can also put the appended element to local object like this:
    $fontStyle = new \PhpOffice\PhpWord\Style\Font();
    $fontStyle->setBold(true);
    $fontStyle->setName('Verdana');
    $fontStyle->setSize(22);
    $myTextElement = $section->addText('Hello World!');
    $myTextElement->setFontStyle($fontStyle);

    // Finally, write the document:
        // The files will be in your public folder
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('helloWorld.docx');

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
    $objWriter->save('helloWorld.odt');

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'RTF');
    $objWriter->save('helloWorld.rtf');

});