<div class="<?php FLBuilder::render_row_class($row); ?>"<?php FLBuilder::render_row_data_attrs($row); ?>>
    <div class="fl-row-content-wrap">
        <?php FLBuilder::render_row_bg($row); ?>
        <div class="<?php FLBuilder::render_row_content_class($row); ?>">
        <?php
        
        foreach($groups as $group) {
            FLBuilder::render_column_group($group);
        }
        
        ?>
        </div>
    </div>
</div>