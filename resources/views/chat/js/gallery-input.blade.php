<script>
    const galleryInput = document.getElementById('galleryInput');
    const previewImagesContainer = document.getElementById('previewImages');
    let currentPreviewImage = null;

    galleryInput.addEventListener('change', function() {
        const files = this.files;
        if (files.length === 0) {
            return;
        }

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (!file.type.startsWith('image/')) {
                continue;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                const imgContainer = document.createElement('div');
                imgContainer.classList.add('img-container');
                imgContainer.style.backgroundImage = `url('${event.target.result}')`;
                imgContainer.setAttribute('data-image-url', event.target.result);

                const closeBtn = document.createElement('a');
                closeBtn.href = '#';
                closeBtn.classList.add('close-btn');
                closeBtn.innerHTML = '<i class="bx bx-trash"></i>';
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    imgContainer.remove();
                    if (previewImagesContainer.children.length === 0) {
                        document.querySelector('.preview-image-upload').classList.add('d-none');
                    }
                });

                imgContainer.appendChild(closeBtn);
                imgContainer.addEventListener('click', function() {
                    const imageUrl = imgContainer.getAttribute('data-image-url');
                    document.getElementById('modalImage').src = imageUrl;
                    $('#imageModal').modal('show');
                    currentPreviewImage = imgContainer;
                });

                previewImagesContainer.appendChild(imgContainer);
            };
            reader.readAsDataURL(file);
        }
        document.querySelector('.preview-image-upload').classList.remove('d-none');
    });

    document.querySelector('.close-preview').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('.preview-image-upload').classList.add('d-none');
        previewImagesContainer.innerHTML = '';
        galleryInput.value = '';
    });

    document.getElementById('deleteImageBtn').addEventListener('click', function() {
        if (currentPreviewImage) {
            currentPreviewImage.remove();
            $('#imageModal').modal('hide');
            if (previewImagesContainer.children.length === 0) {
                document.querySelector('.preview-image-upload').classList.add('d-none');
            }
            currentPreviewImage = null;
        }
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('.modal-content').length &&
            !$(event.target).closest('.img-container').length &&
            !$(event.target).closest('.close').length) {
            $('#imageModal').modal('hide');
        }
    });
</script>