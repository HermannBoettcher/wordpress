<div id="comments">
  <?php if (post_password_required()): ?>
    <p class="nopassword">Bitte geben Sie das Passwort ein, um Kommentare zu lesen.</p>
</div>
<?php return; endif; ?>
<div id="content-form">
  <?php
    $fields = array(
      'author' => '<p class="comment-form-author">
      <label for="author">Ihr Name<em>(erforderlich)</em></label>
      <input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',

      'email' => '<p class="comment-form-email">
      <label for="email">Ihre Email-Adresse<em>(erforderlich, wird aber nicht veröffentlicht)</em></label>
      <input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',

      'url' => '<p class="comment-form-url">
      <label for="url">Ihre Website</label>
      <input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30"' . $aria_req . ' /></p>',

    );
    comment_form( array(
      'fields' => apply_filters( 'vomment_form_default_fields', $fields ),
      'label_submit' => 'Beitrag kommentieren',
      'title_reply' => '<h6>Beitrag kommentieren</h6>',
      'comment_notes_before' => '',
      'comment_notes_after' => ''
    ))

  ?>
</div>
<?php if (have_comments()): ?>

  <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
    <div class="navigation">
      <div class="nav-previous">
        <?php previous_comments_link('&laquo; Ältere Kommentare'); ?>
      </div>
      <div class="nav-text">
        <?php next_comments_link('Neuere Kommentare &raquo;'); ?>
      </div>
    </div>
  <?php endif; ?>
  <div id="content-comments">
    <h6>Alle Kommentare</h6>
    <ul>
      <?php wp_list_comments('type=all&callback=callback_comment') ?>
    </ul>
  </div>
  <?php if (! comments_open()); ?>
    <p class="nocmments">Die Kommentarfunktion ist leider deaktiviert.</p>
  <?php endif; ?>
