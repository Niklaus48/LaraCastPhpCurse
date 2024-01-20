
<ul>
    <?php foreach ($filteredPerson as $item) :  ?>
        <li>
            <a href="#">
                <?= $item['name'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
