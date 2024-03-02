<script>

</script>

<template>
  <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
  <dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      <div class="font-bold text-lg">
        <slot name="modal-header"/>
      </div>
      <div>
        <slot name="modal-body"/>
      </div>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <slot name="modal-footer"/>
        </form>
      </div>
<!--      <div class="modal-action">-->
<!--        <form method="dialog">-->
<!--          &lt;!&ndash; if there is a button in form, it will close the modal &ndash;&gt;-->
<!--          <button class="btn">Close</button>-->
<!--        </form>-->
<!--      </div>-->
    </div>
  </dialog>
</template>
