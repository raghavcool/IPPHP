<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  <?php
set_time_limit(30);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);


$users = array (
"darshan.shankavaram@capgemini.com",
"oliver.pfeil@capgemini.com",
"georg.ropp@capgemini.com",
"sudhir.pai@capgemini.com",
"sandra.morteo@capgemini.com",
"mieke.vanhandenhove@capgemini.com",
"pierre.lorquet@capgemini.com",
"sandra.prinsen@capgemini.com",
"john.rogan@us.sogeti.com",
"gary.coggins@capgemini.com",
"laurent.perret@capgemini.com",
"dries.swerts@capgemini.com",
"joerg.schneider@capgemini.com",
"markus.rossmann@capgemini.com",
"mary.martin@capgemini.com",
"huib.aarts@capgemini.com",
"marcelo.scaglione@cpmbraxis.com",
"marc-aurele.vermersch@capgemini.com",
"laurent.barbazanges@capgemini.com",
"martin.urch@capgemini.com",
"jerome.thomas@capgemini.com",
"marc.reinhardt@capgemini.com",
"pieter.johanson@capgemini.com",
"michael.lamb@capgemini.com",
"william.salmon@capgemini.com",
"rich.gelber@capgemini.com",
"xavier.save-de-beaurecueil@capgemini.com",
"david.a.harper@capgemini.com",
"shoney.sankoorikal@capgemini.com",
"bhalaji.raghavan@capgemini.com",
"bob.scott@capgemini.com",
"murat.aksu@capgemini.com",
"govindarajan.muthukrishnan@capgemini.com",
"gaurav.modi@capgemini.com",
"thomas.lang@capgemini.com",
"philippe.beucher@capgemini.com",
"michael.malloni@capgemini.com",
"prasanna.ram@capgemini.com",
"veera.murugan@capgemini.com",
"nikhilesh.dubey@capgemini.com",
"lu.yin@capgemini.com",
"philipp.seuring@capgemini.com",
"chris.heaven@capgemini.com",
"david.tewkesbury@capgemini.com",
"raman.katyal@capgemini.com",
"hugo.terpstra@capgemini.com",
"pavio.muniz@cpmbraxis.com",
"ruth.peters@capgemini.com",
"steve.g.rose@capgemini.com",
"frank.tennstedt@capgemini.com",
"luc.haedens@capgemini.com",
"catherine.perronet@capgemini.com",
"norbert.jachmann@capgemini.com",
"ramon.fiol@capgemini.com",
"benjamin.drevs@capgemini.com",
"mark.payne@capgemini.com",
"lan.oconnor@capgemini.com",
"john.christens@capgemini.com",
"kees.jacobs@capgemini.com",
"biju.george@capgemini.com",
"michel.de.meijer@sogeti.nl",
"richard.lockett@capgemini.com",
"sampathkumar.kesur@capgemini.com",
"alex.baar@capgemini.com",
"nabil.chaykh@sogeti.dk",
"ian.roy@capgemini.com",
"meher.mehta@capgemini.com",
"phil.audley@capgemini.com",
"albert.roth@capgemini.com",
"thomas.schrader@capgemini.com",
"krishnan.narayan@capgemini.com",
"klaas.barten@capgemini.com",
"maarten.galesloot@sogeti.de",
"fiorella.cavallini@capgemini.com",
"morten-knold.lund@capgemini.com",
"damien.bach@capgemini.com",
"darren.coupland@uk.sogeti.com",
"frederic.brosset@capgemini.com",
"arun.thiagarajan@capgemini.com",
"puja.gupta@capgemini.com",
"renato.vista@capgemini.com",
"subir.sarbabidya@capgemini.com",
"gunnar.ebner@capgemini.com",
"johan.flikweert@sogeti.nl",
"jyoti.biswas@capgemini.com",
"matthieu.peaureaux@capgemini.com",
"david.clague@capgemini.com",
"prashant.chaturvedi@capgemini.com",
"mieke.vanhandenhove@capgemini.com",
"dipanjan.banerjee@capgemini.com",
"jonathan.mills@capgemini.com",
"paul.j.wilson@capgemini.com",
"marco.vanden.brink@sogeti.nl",
"tim.woodcock@capgemini.com",
"kimy.tran@capgemini.com",
"jacques.millery@capgemini.com",
"thierry.petitjean@capgemini.com",
"yashwant.pai@capgemini.com",
"Jorge.Milla-Mateos@capgemini.com",
"andrew.heppelle@capgemini.com",
"thomas.lang@capgemini.com",
"martin.urch@capgemini.com",
"kaustubh.gokhale@capgemini.com",
"subhash.bana@capgemini.com",
"rocio.bustinza@capgemini.com",
"huib.aarts@capgemini.com",
"benedicta.gallegohuerta@capgemini.com",
"jaap.blankevoort@capgemini.com",
"christoph.ostendorf@capgemini.com",
"robert.tymchyshyn@capgemini.com",
"thiago.ponte@cpmbraxis.com",
"harold.liu@capgemini.com",
"dries.swerts@capgemini.com",
"nitin.goel@capgemini.com",
"claire.hale@capgemini.com",
"laurence.chretien@capgemini.com",
"james.govan@ie.sogeti.com",
"anders.barsch@capgemini.com",
"anders.rasmusson@capgemini.com",
"per.edberg@capgemini.com",
"gunnar.menzel@capgemini.com",
"ward.de.vin@capgemini.com",
"david.ganesh@capgemini.com",
"eric.roudil@capgemini.com",
"claes.kongsdam@sogeti.dk",
"mohammad.sayed@capgemini.com",
"simon.short@capgemini.com",
"jean-louis.nicolas@capgemini.com",
"tim.jarvis@capgemini.com",
"anders.ravik@capgemini.com",
"stefano.verri@capgemini.com"
);
// config
$ldapserver = 'corp.capgemini.com';
$ldapuser      = '';  
$ldappass     = '';
$ldaptree    = "OU=Employees,DC=corp,DC=capgemini,DC=com";

// connect 
$ldapconn = ldap_connect($ldapserver) or die("Could not connect to LDAP server.");

if($ldapconn) {

echo "LDAP connection successful...<br /><br />";
// binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldapuser, $ldappass) or die ("Error trying to bind: ".ldap_error($ldapconn));

// verify binding
    if ($ldapbind) {
       echo "LDAP bind successful...<br /><br />";
	}

$attributes = array("displayname", "mail", "samaccountname", "co","cn"); 

$count = count($users);
echo "<table border=1>";
	echo "<tr> <td> No# </td><td> Email ID </td><td> Country </td> </tr>";
for ($j = 0; $j < $count; $j++) {
// echo $users[$i]."<br>";

 $filter = "(&(mail=".$users[$j]."))";

$result = ldap_search($ldapconn, $ldaptree, $filter, $attributes);

//echo "Number of entries found: " . ldap_count_entries($ldapconn, $result);

 $data = ldap_get_entries($ldapconn, $result);
	
	
	 for ($i=0; $i<$data["count"]; $i++) {
		$k =$j+1;
		 echo "<tr>";
		 //<td>$k</td><td>". $data[$i]["cn"][0] ."</td>
            if(isset($data[$i]["mail"][0])) {
                echo "<td>". $data[$i]["mail"][0] ."</td>";
            } else {
                echo "<td>Email: None</td>";
            }

			 if(isset($data[$i]["co"][0])) {
                echo "<td>". $data[$i]["co"][0] ."</td>";
            } else {
                echo "<td>Country: None</td></tr>";
            }
	 }
	

	

}
 echo "</table>";

//$filter = "(&(mail=raghavendra.uppunda@capgemini.com))";
   
 // $result = ldap_search($ldapconn,$ldaptree, "(cn=*)") or die ("Error in search query: ".ldap_error($ldapconn));

 // print number of entries found
       // echo "Number of entries found: " . ldap_count_entries($ldapconn, $result);

		/* $data = ldap_get_entries($ldapconn, $result);
		 // SHOW ALL DATA
        echo '<h1>Dump all data</h1><pre>';
        print_r($data);    
        echo '</pre>';

		 for ($i=0; $i<$data["count"]; $i++) {
            //echo "dn is: ". $data[$i]["dn"] ."<br />";
            echo "User: ". $data[$i]["cn"][0] ."<br />";
            if(isset($data[$i]["mail"][0])) {
                echo "Email: ". $data[$i]["mail"][0] ."<br />";
            } else {
                echo "Email: None<br /><br />";
            }

			 if(isset($data[$i]["co"][0])) {
                echo "Country: ". $data[$i]["co"][0] ."<br />";
            } else {
                echo "Country: None<br /><br />";
            }

        }
		*/


	ldap_unbind($ldapconn );
}

// all done? clean up
//ldap_close($ldapconn);

/*
if($ldapconn) {
    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldapuser, $ldappass) or die ("Error trying to bind: ".ldap_error($ldapconn));
    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...<br /><br />";
        
        
        $result = ldap_search($ldapconn,$ldaptree, "(cn=*)") or die ("Error in search query: ".ldap_error($ldapconn));
        $data = ldap_get_entries($ldapconn, $result);
        
        // SHOW ALL DATA
        echo '<h1>Dump all data</h1><pre>';
      //  print_r($data);    
        echo '</pre>';
        
        
        // iterate over array and print data for each entry
        echo '<h1>Show me the users</h1>';
        for ($i=0; $i<$data["count"]; $i++) {
            //echo "dn is: ". $data[$i]["dn"] ."<br />";
            echo "User: ". $data[$i]["cn"][0] ."<br />";
            if(isset($data[$i]["mail"][0])) {
                echo "Email: ". $data[$i]["mail"][0] ."<br /><br />";
            } else {
                echo "Email: None<br /><br />";
            }
        }

        // print number of entries found
        echo "Number of entries found: " . ldap_count_entries($ldapconn, $result);
    } else {
        echo "LDAP bind failed...";
    }

}
*/



?>
 </body>
</html>
