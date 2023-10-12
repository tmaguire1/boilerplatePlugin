<?php
$str = get_plugin_options('field_1');
echo "<div id='contentDiv' data-attribute=$str></div>";
?>


<script>

    const contentDiv = document.getElementById('contentDiv');


    console.log(contentDiv)

    const attribute = contentDiv.getAttribute('data-attribute');


    const newElement = document.createElement('h1');

    newElement.innerText = attribute;

    contentDiv.appendChild(newElement)



</script>