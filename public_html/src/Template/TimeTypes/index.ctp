<!-- Card CSS -->
<?= $this->Html->css('Elements/card'); ?>

<div id="time-types-overview" class="col-md-12 d-flex">
    <?php
        foreach ($time_types as $time_type)
        {
            echo '
                <div class="card">
                    '.$this->Html->image('Elements/grey_background.jpg', [
                        'class' => 'card-img-top',
                        'alt'   => __('Time Types Logo')
                    ]).'

                    <div class="card-body">
                        <h5 class="card-title">'.$time_type->name       .'</h5>
                        <p class="card-text">'.  $time_type->description.'</p>
                    </div>
                </div>
            ';
        }
    ?>
</div>
