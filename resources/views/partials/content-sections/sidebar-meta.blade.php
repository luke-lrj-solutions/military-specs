@php
  function get_tax_display($post_id, $taxonomy) {
      $terms = get_the_terms($post_id, $taxonomy);
      if (is_wp_error($terms) || empty($terms)) return null;

      return [
          'value' => implode(', ', wp_list_pluck($terms, 'name')),
          'link' => get_term_link($terms[0]), // Optional: add logic if you want to link to the term archive
      ];
  }

  $origin = get_tax_display(get_the_ID(), 'country-of-origin');
  $manufacturer = get_tax_display(get_the_ID(), 'manufacturer');

  $metaItems = [];

  if ($origin) {
      $metaItems[] = [
          'key' => 'Country',
          'value' => $origin['value'],
          'link' => $origin['link'],
          'span' => '2',
      ];
  }

  if ($manufacturer) {
      $metaItems[] = [
          'key' => 'Manufacturer',
          'value' => $manufacturer['value'],
          'link' => $manufacturer['link'],
          'span' => '2',
      ];
  }
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
