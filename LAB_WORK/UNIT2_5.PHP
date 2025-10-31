<?php
// Resume data stored in associative arrays
$resume = [
    'name' => 'Aarav Patel',
    'email' => 'aarav.patel@example.com',
    'phone' => '+91-9876543210',
    'address' => 'Rajkot, Gujarat, India',
    'summary' => 'Motivated software engineer with 3+ years of experience in web development and cloud technologies.',
    'skills' => ['PHP', 'JavaScript', 'HTML/CSS', 'MySQL', 'Laravel', 'Git'],
    'experience' => [
        [
            'position' => 'Software Developer',
            'company' => 'TechNova Solutions',
            'duration' => '2022–Present',
            'details' => 'Developed scalable web applications and RESTful APIs using Laravel and Vue.js.'
        ],
        [
            'position' => 'Junior Developer',
            'company' => 'CodeCraft Inc.',
            'duration' => '2020–2022',
            'details' => 'Assisted in building e-commerce platforms and maintained legacy PHP systems.'
        ]
    ],
    
    'education' => [
        [
            'degree' => 'B.Tech in Computer Science',
            'institution' => 'Gujarat Technological University',
            'year' => '2020'
        ]
    ]
];

echo "<br/><br/>";

// Resume formatting
echo "==============================\n";
echo "<br/><br/>";
echo sprintf("Name: %s\n", $resume['name']);
echo "<br/><br/>";
echo sprintf("Email: %s\n", $resume['email']);
echo "<br/><br/>";
echo sprintf("Phone: %s\n", $resume['phone']);
echo "<br/><br/>";
echo sprintf("Address: %s\n", $resume['address']);
echo "<br/><br/>";
echo "------------------------------\n";
echo "<br/><br/>";
echo "Professional Summary:\n";
echo "<br/><br/>";
echo $resume['summary'] . "\n";
echo "------------------------------\n";
echo "<br/><br/>";
echo "Skills:\n";
echo implode(', ', $resume['skills']) . "\n";
echo "<br/><br/>";
echo "------------------------------\n";
echo "<br/><br/>";
echo "Experience:\n";
echo "<br/><br/>";
foreach ($resume['experience'] as $job) {
    echo sprintf("- %s at %s (%s)\n  %s\n", $job['position'], $job['company'], $job['duration'], $job['details']);
}
echo "<br/><br/>";
echo "------------------------------\n";
echo "<br/><br/>";
echo "Education:\n";
echo "<br/><br/>";
foreach ($resume['education'] as $edu) {
    echo sprintf("- %s, %s (%s)\n", $edu['degree'], $edu['institution'], $edu['year']);
}
echo "<br/><br/>";
echo "==============================\n";
?>
