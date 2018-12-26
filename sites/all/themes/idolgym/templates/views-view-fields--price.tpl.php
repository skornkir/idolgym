<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

    <div class="price">
        <div class="title">
            <?php  print $fields['title']->content; ?>
        </div>
        <div class="img">
            <?php print $fields['field_image']->content; ?>
            <div class="cost">
                <?php print $fields['field_price']->content ; ?>
                <div class="end">
                     руб
                </div>

            </div>
        </div>
        <div class="body">
            <div class="b-group-card__cont">
                <div class="b-unlim-card__cont__row"><i><b>Пробное занятие</b></i> включено</div>
                <div class="b-unlim-card__cont__row"><i><b>4 занятия</b></i> в неделю</div>
                <div class="b-unlim-card__cont__row"><i><b>Заморозка</b></i> включено</div>
                <a href="#" class="btn form_price_btn">Купить</a>
                <div class="form_price form_block active">
                    <form class="sendform" action="http://fitness.wpmix.net/wp-content/plugins/absolutefitness-plugin/sendform.php" method="post">
                        <input name="ftitle" type="hidden" value="Strength training">
                        <input type="hidden" name="nonce" class="nonce" value="26e4af87e1">
                        <input name="typform" type="hidden" class="nonce" value="typ3">
                        <div class="results-ajax"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php /*foreach ($fields as $id => $field): */?><!--
    <?php /*if (!empty($field->separator)): */?>
        <?php /*print $field->separator; */?>
    <?php /*endif; */?>

    <?php /*print $field->wrapper_prefix; */?>
    <?php /*print $field->label_html; */?>
    <?php /*print $field->content; */?>
    <?php /*print $field->wrapper_suffix; */?>
--><?php /*endforeach; */?>