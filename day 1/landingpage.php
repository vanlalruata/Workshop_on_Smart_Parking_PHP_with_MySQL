<?php
// Simulated database data (retrieved as arrays)

// Featured Products or Services
$services = [
    ["title" => "Web Development", "description" => "Building responsive and functional websites.", "image" => "webdev.jpg"],
    ["title" => "Mobile App Development", "description" => "Creating mobile apps for Android and iOS.", "image" => "mobiledev.jpg"],
    ["title" => "Digital Marketing", "description" => "Helping you reach your audience online.", "image" => "digitalmarketing.jpg"]
];

// Testimonials
$testimonials = [
    ["name" => "John Doe", "feedback" => "This service was amazing! Highly recommend.", "image" => "john.jpg"],
    ["name" => "Jane Smith", "feedback" => "A wonderful experience from start to finish.", "image" => "jane.jpg"],
    ["name" => "Sam Wilson", "feedback" => "Professional and reliable. Great results!", "image" => "sam.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .section {
            padding: 40px;
            text-align: center;
        }
        .service, .testimonial {
            display: inline-block;
            width: 30%;
            margin: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .service img, .testimonial img {
            width: 100%;
            height: 150px;
            border-radius: 10px;
        }
        .service h3, .testimonial h4 {
            color: #333;
        }
        .testimonial p {
            font-style: italic;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Welcome to Our Landing Page</h1>
        <p>Your satisfaction is our priority</p>
    </div>

    <div class="section">
        <h2>Our Services</h2>
        <div class="services-container">
            <?php foreach ($services as $service): ?>
                <div class="service">
                    <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section">
        <h2>What Our Clients Say</h2>
        <div class="testimonials-container">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial">
                    <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>">
                    <h4><?php echo $testimonial['name']; ?></h4>
                    <p>"<?php echo $testimonial['feedback']; ?>"</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 MZU. All rights reserved.</p>
    </div>

</body>
</html>