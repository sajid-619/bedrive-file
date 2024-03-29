import {useQuery} from '@tanstack/react-query';
import {apiClient} from '@common/http/query-client';

export function useSeoTags(name: string | string[]) {
  return useQuery(['admin', 'seo-tags', name], () => fetchTags(name));
}

function fetchTags(name: string | string[]) {
  return apiClient
    .get<
      Record<
        string,
        {
          custom: string | null;
          original: string;
        }
      >
    >(`admin/appearance/seo-tags/${name}`)
    .then(response => response.data);
}
