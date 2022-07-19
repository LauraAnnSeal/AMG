<!-- 
    /* -------------------------------------------------------------------------- */
    /*                             Social Media Modal                             */
    /* -------------------------------------------------------------------------- */
 --><!-- Modal -->
 <div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
            Share this <?php echo get_post_type( get_the_ID() ) ?>
        </h5>
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        <button id="copyBtn" class="btn btn-success">Copy link</button>
      </div>
    </div>
  </div>
</div>

<script>
    const copyBtn = document.querySelector('#copyBtn')
    async function copyPageUrl() {
      try {
        await navigator.clipboard.writeText(location.href);
        copyBtn.innerText = 'Copied!'
        copyBtn.style.backgroundColor = '#67c350'
        setTimeout(() => {
          copyBtn.innerText = 'Copy link'
          
        }, 1500);
      } catch (err) {
        console.error('Failed to copy: ', err);
      }
    }
    copyBtn.addEventListener('click', copyPageUrl)
</script>