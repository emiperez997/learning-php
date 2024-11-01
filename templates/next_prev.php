<?php

$is_next = isset($next);
$is_prev = isset($prev);

?>

<section class="next-prev container">
  <a href="<?= $is_prev ? "$prev" : "" ?>">
    <button <?= !$is_prev ? "disabled" : ""  ?>>
      <svg fill="#FFFFFF" width="24px" height="30px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
        <path d="M615.177 345 0 960.292l615.177 615.177 81.25-81.25-476.467-476.466H1920V902.83H219.96l476.467-476.58z" fill-rule="evenodd" />
      </svg>
    </button>
  </a>
  <a href="<?= $is_next ? "$next" : "" ?>">
    <button <?= !$is_next ? "disabled" : ""  ?> data-tooltip="<?= $next ?>">
      <svg fill="#FFFFFF" width="24px" height="30px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
        <path d="m1304.824 345.002-81.25 81.249 476.466 476.582H0v114.922h1700.04l-476.466 476.465 81.25 81.25L1920 960.293z" fill-rule="evenodd" />
      </svg>
    </button>
  </a>

</section>