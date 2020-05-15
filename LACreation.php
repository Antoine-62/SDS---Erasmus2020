<?php
include("include/Head.php");
include("include/Configuration.php");
/*	Function to create the learning agreement
*/
require_once 'bootstrap.php';

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection(
   array('marginLeft' => 400, 'marginRight' => 400)
 );
//'headerHeight'=> \PhpOffice\PhpWord\Shared\Converter::cmToPixel(2)//Will see later
/*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

/*First we ddefine the Style/police of the element*/


$tableStyle = array(
	'borderSize' => 1,
	'borderColor' => '999999',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>-10  );
	
$styleCell = array(
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black'
	,'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);
$cellRowSpan = array(
	'vMerge' => 'restart',
	'valign' => 'center',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black'
	,'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);

$cellRowContinue = array(
	'vMerge' => 'continue',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black'
	,'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);
$cellColSpan = array(
	'gridSpan' => 2,
	'valign' =>'center',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black'
	,'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);

$cellCol6Span = array(
	'gridSpan' => 6,
	'align' =>'center',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black'
	,'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);



//style cell table 2 and 4

$cellCol5Span = array(
	'gridSpan' => 5,
	'align' =>'center',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black',
	'borderRightSize'=>1,
	'borderRightColor'=>'black',
	'borderBottomSize' =>1,
	'borderBottomColor'=>'black' 
);

$cellCol4SpanTop = array(
	'gridSpan' => 4,
	'align' =>'center',
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderRightSize'=>1,
	'borderRightColor'=>'black',
);

$cellCol4Span = array(
	'gridSpan' => 4,
	'align' =>'center',
	'borderRightSize'=>1,
	'borderRightColor'=>'black',
);

$styleCellT2LTop = array(
	'borderTopSize'=>1 ,
	'borderTopColor' =>'black',
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black',
);

$styleCellT2L = array(
	'borderLeftSize'=>1,
	'borderLeftColor' =>'black',
);


//style text header
$HfontStyle = array(
	'bold'=>true,
	'color'=>'#003CB4',
	'size'=>8,
	'name' => 'Verdana',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0,
	'align' => 'right');
	
//style text textbox above header
$TextBoxfontStyle = array(
	'bold'=>true,
	'color'=>'#002060',
	'size'=>14,
	'name' => 'Verdana',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0,
	'align' => 'right');
	
//style text title
$TitlefontStyle = array(
	'bold'=>true,
	'size'=>11,
	'name' => 'Calibri',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0);

//style text table
$TfontStyle = array(
	'size'=>8,
	'name' => 'Calibri',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0);
	
$TfontStyle2 = array(
	'size'=>7,
	'name' => 'Calibri',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0);
	
$TfontStyleG = array(
	'bold'=>true,
	'size'=>8,
	'name' => 'Calibri',
	'afterSpacing' => 0,
	'Spacing'=> 0,
	'cellMargin'=>0);
//200 twip/letter

$textbox = $section->addTextBox(
    array(
         'width' => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(7),
		'height' => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.4),
		'positioning' => 'absolute',
		'posHorizontal' => 'absolute',
		'posVertical' => 'absolute',
		'borderSize' => 1,
		'borderColor' => 'white',
		'posVerticalRel' => 'page',
		'posHorizontalRel' => 'page',
		'marginLeft' => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(4.5),
		'marginTop' => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0.75),
		'spaceAfter' => 0
        //'wrappingStyle' => \PhpOffice\PhpWord\Style\Image::WRAPPING_STYLE_SQUARE
    ),null,array('align' => 'center', 'spaceAfter' => 0)
);
$textbox->addText('Learning Agreement <w:br/> Student Mobility for Studies',$TextBoxfontStyle, array('align' => 'center', 'spaceAfter' => 0));

//Creation of the header
$header = $section->addHeader();
//$headertextrun =$header->addTextRun();
$header->addText(
	"Higher Education: <w:br/>"
	."Learning Agreement form <w:br/>"
	."Student’s name <w:br/>"
	."Academic Year 20…/20…"
	,$HfontStyle,array('align' => 'right', 'spaceAfter' => 0));
$header->addImage(
    'UEflag.png',
    array(
		'width' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(3.56)),
		'height' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(0.72)),
		//'positioning' => 'absolute',
		'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
		//'posHorizontal'    => \PhpOffice\PhpWord\Style\Image::POSITION_HORIZONTAL_LEFT,
		'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
		'posVertical' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
		//'posHorizontalRel' => 'margin',
		'marginRigtht' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(1.36)),
		'marginTop' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(-1)),
		'posVerticalRel' => 'line',
        'wrappingStyle' => 'infront',
		//'align'=>'left'
    )
);

/*Creation of the table*/
/*Information about the student*/	
$table = $section->addTable([$tableStyle]);
$table->addRow();
$table->addCell(1400, $cellRowSpan)->addText('Student',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText('Last name',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText('First Name',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText('Date of birth',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('Nationality',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('sex[M/F]',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText('Study cycle',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(3000, $styleCell)->addText('Field of education',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));

/*Here we retrieve the student's data from the database*/
$RetUser = $bdd->query("select * from user where Username = '".$_SESSION['Username']."'");

    while ($User = $RetUser->fetch())
    {
         $FirstName = $User["FirstName"];
         $LastName = $User["Surname"];
		 $BirthDate = $User["DateOfBirth"];
		 $Nationality = $User["Nationality"];
         $Sex = $User["Sex"];
		 $StudyCycle = $User["StudyCycle"];
		 $FieldOfEducation = $User["FieldOfEducation"];
		 $positionUser= $User["status"];
		 if($positionUser == '1')
		 {
			$positionUser = "Student";
		 }
		 else
		 {
			 $positionUser = "Erasmus Coordinator";
		 }
		 $emailUser = $User["Email"];
		 $nameUser = $FirstName.' '.$LastName;
	}


$table->addRow();
$table->addCell(null, $cellRowContinue)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText( $FirstName,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText($LastName,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText($BirthDate,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText($Nationality,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText($Sex,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText($StudyCycle,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(3000, $styleCell)->addText($FieldOfEducation,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

/*Information about the Sending Institution*/
$table->addRow();
$table->addCell(1400, $cellRowSpan)->addText('Sending Institution',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText('Name',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText('Faculty/Department',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText('Erasmus Code (if applicable)',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('Address',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('Country',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(5000, $cellColSpan)->addText('Contact person name; email; phone',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));

		
$table->addRow();
$table->addCell(null, $cellRowContinue)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(5000, $cellColSpan)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));


/*Information about the Receiving Institution*/
$table->addRow();
$table->addCell(1400, $cellRowSpan)->addText('Receiving Institution',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText('Name',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText('Faculty/Department',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText('Erasmus Code (if applicable)',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('Address',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText('Country',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(5000, $cellColSpan)->addText('Contact person name; email; phone',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));

//we retrieve information about faculty and University
$RetFac = $bdd->query("select * from faculty where IdF in(select IdF from course where IdC in(select IdC from choose where IdChoose = '".$_POST['item1']."' ))");
    while ($Fac = $RetFac->fetch())
    {
		$IdF = $Fac["IdF"];
		$nameF = $Fac["Name"];
		$FacCoordinator = $Fac["Coordinator"];
		$FacEmail = $Fac["Email"];
		$FacPhone = $Fac['Phone'];
             
    }

    $Univers = $bdd->query("select * from university where IdUnivers in(select IdUnivers from faculty where IdF = '".$IdF."' )");
    while ($Univer = $Univers->fetch())
    {
		$nameU = $Univer["Name"];
		$CountryUniv = $Univer["Country"];
		$AddressUniv = $Univer["Address"];
		$CodeUniv = $Univer['ErasmusCode'];
			 
	}

$table->addRow();
$table->addCell(null, $cellRowContinue)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1800, $styleCell)->addText($nameU,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2000, $styleCell)->addText($nameF,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(2600, $styleCell)->addText($CodeUniv,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText($AddressUniv,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(1400, $styleCell)->addText($CountryUniv,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table->addCell(5000, $cellColSpan)->addText($FacCoordinator.", ".$FacEmail.', '.$FacPhone,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

$section->addText(
    ' ',null,array('align' => 'center', 'spaceAfter' => 0)
);


// Adding Text element to the Section having font styled by default...
$section->addText(
    'Before the mobility', $TitlefontStyle,array('align' => 'center', 'spaceAfter' => 0)
);

//Table 2 --> Courses of the receiving institution

$table2 = $section->addTable([$tableStyle]);
$table2->addRow();
$table2->addCell(1400, $styleCellT2LTop)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(13000, $cellCol4SpanTop)->addText('Study Programme at the Receiving Institution',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addRow();
$table2->addCell(1400, $styleCellT2L)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(13000, $cellCol4Span)->addText('Planned period of the mobility: from [month/year] ……………. to [month/year] ……………',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addRow();
$table2->addCell(1400, $styleCellT2L)->addText('Table A <w:br/> Before the mobility',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('Component code <w:br/> (if any)',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(5000, $styleCell)->addText('Component title at the Receiving Institution <w:br/> (as indicated in the course catalogue ) ',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('Semester',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(4000, $styleCell)->addText('Number of ECTS credits (or equivalent)  to be awarded by the Receiving Institution upon successful completion',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
//Here we enter our courses in the table
$total = 0;
for($i=0; $i<$_POST['length']; $i++)
{
	$table2->addRow();
    $RetCourse = $bdd->query("select Name, ECTS, IdC from course where IdC in(select IdC from choose where IdChoose like '".$_POST['item'.$i]."' )");
    while ($Course = $RetCourse->fetch())
    {
         $name = $Course["Name"];
         $ects = $Course["ECTS"];
         $total = $total + $ects;
	}
	$table2->addCell(1400, $styleCellT2L)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
	$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
	$table2->addCell(5000, $styleCell)->addText($name,$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
	$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
	$table2->addCell(4000, $styleCell)->addText($ects,$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
}
$table2->addRow();
$table2->addCell(1400, $styleCellT2L)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(5000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(4000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addRow();
$table2->addCell(1400, $styleCellT2L)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(5000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addCell(4000, $styleCell)->addText('Total : '.$total,$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table2->addRow();
$table2->addCell(14400, $cellCol5Span)->addText('Web link to the course catalogue at the Receiving Institution describing the learning outcomes: [web link to the relevant information]',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));



$section->addText(
    ' ',null, array('align' => 'center', 'spaceAfter' => 0)
);

//Information about language level
$table3 = $section->addTable([$tableStyle]);
$table3->addRow();
$table3->addCell(15000, $styleCell)->addText(
	'The level of language competence in English [indicate here the main language of instruction] that the student already has or agrees to acquire '
	.'by the start of the study period is: A1 ☐     A2 ☐     B1  ☐     B2 ☐    C1 ☐     C2 ☐     Native speaker ☐',
	$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
	
$section->addText(
    ' ',null, array('align' => 'center', 'spaceAfter' => 0)
);

//Table 4 --> Courses of the sending institution

$table4 = $section->addTable([$tableStyle]);
$table4->addRow();
$table4->addCell(1400, $styleCellT2LTop)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(13000, $cellCol4SpanTop)->addText('Recognition at the Sending Institution',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addRow();
$table4->addCell(1400, $styleCellT2L)->addText('Table B <w:br/> Before the mobility',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('Component code <w:br/> (if any)',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(5000, $styleCell)->addText('Component title at the Sending Institution <w:br/> (as indicated in the course catalogue ) ',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('Semester',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(4000, $styleCell)->addText('Number of ECTS credits (or equivalent)  to be recognised by the Sending Institution',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));

$table4->addRow();
$table4->addCell(1400, $styleCellT2L)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(5000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(4000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addRow();
$table4->addCell(1400, $styleCellT2L)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(5000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(2000, $styleCell)->addText('',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addCell(4000, $styleCell)->addText('Total',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table4->addRow();
$table4->addCell(14400, $cellCol5Span)->addText('Provisions applying if the student does not complete successfully some educational components: [web link to the relevant information]',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

$section->addText(
    ' ',null,array('align' => 'center', 'spaceAfter' => 0)
);


//Table Commitment
$table5 = $section->addTable([$tableStyle]);
$table5->addRow();
$cel1Tab5 = $table5->addCell(15000, $cellCol6Span)->addTextRun(array('align' => 'center'));
$cel1Tab5->addText('Commitment <w:br/>',$TfontStyleG);
$cel1Tab5->addText(
	"By signing this document, the student, the Sending Institution and the Receiving Institution confirm that they approve the "
	."Learning Agreement and that they will comply with all the arrangements agreed by all parties. Sending and Receiving Institutions "
	."undertake to apply all the principles of the Erasmus Charter for Higher Education relating to mobility for studies (or the principles "
	."agreed in the Inter-Institutional Agreement for institutions located in Partner Countries). The Beneficiary Institution and the student "
	."should also commit to what is set out in the Erasmus+ grant agreement. The Receiving Institution confirms that the educational components "
	."listed in Table A are in line with its course catalogue and should be available to the student. The Sending Institution commits to "
	."recognise all the credits or equivalent units gained at the Receiving Institution for the successfully completed educational components "
	."and to count them towards the student's degree as described in Table B. Any exceptions to this rule are documented in an annex of this "
	."Learning Agreement and agreed by all parties. The student and the Receiving Institution will communicate to the Sending Institution any "
	."problems or changes regarding the study programme, responsible persons and/or study period",
	$TfontStyle2,array('align' => 'center', 'spaceAfter' => 0));
	
$table5->addRow();
$table5->addCell(2500, $styleCell)->addText('Commitment',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('Name',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('Email',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2000, $styleCell)->addText('Position',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(1500, $styleCell)->addText('Date',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('Signature',$TfontStyleG,array('align' => 'center', 'spaceAfter' => 0));

$table5->addRow();
$table5->addCell(2500, $styleCell)->addText('Student',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText($nameUser,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText($emailUser,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2000, $styleCell)->addText($positionUser,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(1500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

$table5->addRow();
$table5->addCell(2500, $styleCell)->addText('Responsible person  at the Sending Institution',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2000, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(1500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

$table5->addRow();
$table5->addCell(2500, $styleCell)->addText('Responsible person at the Receiving Institution ',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText($FacCoordinator,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText($FacEmail,$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2000, $styleCell)->addText("Erasmus Coordinator",$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(1500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));
$table5->addCell(2500, $styleCell)->addText('',$TfontStyle,array('align' => 'center', 'spaceAfter' => 0));

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
ob_clean();
$objWriter->save('results/LearnExperiment.docx');

$contentType = 'Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document;';

$file = 'results/LearnExperiment.docx';
$fileName = "LearnExperiment.docx";

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment; filename=\"".$fileName."\""); 

readfile ($file);
exit(); 
