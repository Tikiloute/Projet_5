<h1> Bienvenue sur mon nouveau site </h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aliquid, unde laborum soluta quos laudantium nostrum porro obcaecati deserunt numquam ad dolorum quaerat, eum eos recusandae aliquam facilis exercitationem nihil. Consectetur, soluta libero autem delectus sit molestiae eos odit impedit dolorem quisquam, deserunt nisi nesciunt eligendi velit porro unde itaque a, commodi magni quasi dolore doloremque labore. Beatae praesentium laborum vel numquam iste maxime. Dicta possimus suscipit itaque corporis deleniti tenetur, voluptatum, alias architecto, magnam saepe ut a fuga quaerat cum pariatur quo ad sed autem incidunt? Provident voluptatem ea laborum ex, quasi eligendi quidem aliquid quo reiciendis accusantium distinctio.</p>

<?php
foreach($datas as $data){
    echo $data["nom"]." ";
    echo $data["prenom"];
    echo "<br>";
}

for($i = 0; $i < count($datas); $i++){
    echo $datas[$i]["nom"]." ".$datas[$i]["prenom"];
    echo "<br>";
    echo "-------------------------------------";
    echo "<br>";
}