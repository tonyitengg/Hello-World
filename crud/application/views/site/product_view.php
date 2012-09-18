<h1>Product view rendering !</h1>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tony
 * Date: 9/13/12
 * Time: 2:04 AM
 * To change this template use File | Settings | File Templates.
 */
echo $this->table->generate($records);
echo $this->pagination->create_links();