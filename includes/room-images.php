<?php
/**
 * Resolve the best image for a room based on its name by scanning
 * the `assets/images` folder for a matching filename. Falls back
 * to the provided default image when no match is found.
 */
function normalize_for_match(string $s): string {
    $s = trim($s);
    $s = mb_strtolower($s, 'UTF-8');
    // remove all non-alphanumeric characters
    $s = preg_replace('/[^a-z0-9]+/u', '', $s);
    return $s;
}

function build_image_map(): array {
    static $map = null;
    if ($map !== null) {
        return $map;
    }

    $map = [];
    $dir = __DIR__ . '/../assets/images';
    $patterns = ["/*.jpg", "/*.jpeg", "/*.png", "/*.webp", "/*.gif"]; 
    foreach ($patterns as $p) {
        foreach (glob($dir . $p) as $file) {
            $base = pathinfo($file, PATHINFO_FILENAME);
            $key = normalize_for_match($base);
            // store web path relative to project root
            $map[$key] = './assets/images/' . basename($file);
        }
    }
    return $map;
}

function resolveRoomImage(array $room, ?string $default = null): string {
    $map = build_image_map();

    // Try matching by explicit `image` field if provided
    if (!empty($room['image'])) {
        return $room['image'];
    }

    // Primary: match by room `name`
    if (!empty($room['name'])) {
        $k = normalize_for_match($room['name']);
        if (isset($map[$k])) {
            return $map[$k];
        }
    }

    // Secondary: try matching by key if provided (e.g. array key used elsewhere)
    if (!empty($room['key'])) {
        $k = normalize_for_match($room['key']);
        if (isset($map[$k])) {
            return $map[$k];
        }
    }

    // Tertiary: fall back to first gallery image if available
    if ($default) {
        return $default;
    }

    // final fallback: a generic placeholder if nothing else
    return './assets/images/Slider1.jpeg';
}

?>
