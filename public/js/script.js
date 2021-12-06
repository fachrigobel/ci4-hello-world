function getFileName() {
    const photoProfileInput = document.querySelector('#photo-profile');
    const photoProfileInputLabel = document.querySelector('.custom-file-label');

    photoProfileInputLabel.textContent = photoProfileInput.files[0].name;
}