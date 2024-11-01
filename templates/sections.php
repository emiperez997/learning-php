<section>
  <h2>
    Secciones disponibles
  </h2>

  <aside>
    <?php foreach ($pages as $page) : ?>
      <article>
        <h3 class="uppercase">
          <?= $page["title"] ?>
        </h3>
        <p>
          <?= $page["description"] ?>
        </p>
        <a href="pages/<?= $page["url"] ?>">
          <button>
            Ver sección
          </button>
        </a>
      </article>
    <?php endforeach; ?>
  </aside>
</section>