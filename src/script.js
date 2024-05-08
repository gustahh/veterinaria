function displayFileName() {
    const input = document.getElementById('upload');
    const fileName = input.files[0].name;
    
    document.getElementById('file-name').innerHTML = `
    <div class="flex flex-row">
        <span class="material-symbols-outlined mr-2 text-neutral-900 dark:text-zinc-500">
        draft
        </span>` + 
        `<span>${fileName}</span>
    </div>`
    ;
}