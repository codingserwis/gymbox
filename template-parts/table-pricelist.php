<table id="price-list" class="table table-hover table-striped">
    <thead>
        <tr>
            <?php 
                $price_list = get_field( 'gymbox_pricelist_table' );
                foreach ( $price_list['header'] as $th ) {
                    echo '<th>';
                        echo $th['c'];
                    echo '</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ( $price_list['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>