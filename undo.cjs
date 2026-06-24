const fs = require('fs');
const path = require('path');

function walkDir(dir, callback) {
    fs.readdirSync(dir).forEach(f => {
        let dirPath = path.join(dir, f);
        let isDirectory = fs.statSync(dirPath).isDirectory();
        isDirectory ? walkDir(dirPath, callback) : callback(path.join(dir, f));
    });
}

walkDir('./resources/views', function(filePath) {
    if (!filePath.endsWith('.blade.php')) return;
    let content = fs.readFileSync(filePath, 'utf8');
    
    // Reverse optimizations
    content = content.replace(/py-16 lg:py-24/g, 'py-24');
    content = content.replace(/pt-24 lg:pt-32/g, 'pt-32');
    content = content.replace(/pb-16 lg:pb-24/g, 'pb-24');
    
    content = content.replace(/text-3xl lg:text-4xl/g, 'text-4xl');
    content = content.replace(/text-4xl md:text-5xl lg:text-7xl/g, 'text-5xl md:text-7xl');
    content = content.replace(/text-3xl md:text-4xl lg:text-5xl/g, 'text-3xl md:text-5xl');
    content = content.replace(/text-4xl lg:text-5xl/g, 'text-5xl');
    
    fs.writeFileSync(filePath, content, 'utf8');
});
