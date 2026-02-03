

1. **Start PHP Server**

   php -S localhost:8000

2. **Access in Browser**
   - Open your web browser
   - Go to: `http://localhost:8000`
   - You should see the home page



#### 1. **header.php** (28 lines)
Contains:
- HTML doctype and head section
- Meta tags for responsiveness
- CSS stylesheet link
- Navigation header with logo and menu
- Opening of `<main>` tag

#### 2. **footer.php** (31 lines)
Contains:
- Closing of `<main>` tag
- Footer section with quick links and social media
- Script tag references
- Closing HTML tags


**Before (Duplication Example):**
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation Header -->
    <header class="navbar">
        <!-- ... 15+ lines of header code ... -->
    </header>

    <main>
        <!-- Page content here -->
    </main>

    <!-- Footer -->
    <footer>
        <!-- ... 20+ lines of footer code ... -->
    </footer>
    <script src="script.js"></script>
</body>
</html>
```


**After (After Using Reusable header and footer):**
```php
<?php $pageTitle = 'Page Title'; ?>
<?php include 'header.php'; ?>
    
    <!-- Page specific content here -->
    
<?php include 'footer.php'; ?>
```


