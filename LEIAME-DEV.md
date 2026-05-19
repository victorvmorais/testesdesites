# Summit Talks — Instruções de Integração WordPress

## O que está neste pacote

| Arquivo | O que é |
|---|---|
| `index.html` | Página completa — abrir no navegador para ver o resultado final |
| `page-summit-talks.php` | Template PHP para integrar no WordPress sem o Elementor |
| `assets/hero-bg.jpg` | **Substitua pela foto real do evento** (palco, iluminação vermelha) |

---

## Como integrar no WordPress (passo a passo)

### Opção A — Template PHP (recomendado para SEO)

1. Copie `page-summit-talks.php` para a raiz do tema ativo  
   Ex: `/wp-content/themes/nome-do-tema/page-summit-talks.php`

2. Dentro do arquivo PHP, cole:
   - Todo o conteúdo do `<head>` do `index.html` no local indicado
   - Todo o `<body>` no local indicado
   - O `<script>` antes do `wp_footer()`

3. No admin do WordPress:  
   **Páginas → Criar nova → Título: "Summit Talks"**  
   Em **Atributos de página → Template**: selecione **"Summit Talks LP"**

4. Publique. A URL será: `emergencytalks.com.br/summit-talks/`  
   Se quiser manter a URL original `/produto/summit-talks/`, ajuste o slug manualmente.

### Opção B — HTML direto em Custom HTML (mais simples, menos ideal para SEO)

1. Crie uma nova página no WordPress
2. No Elementor, adicione um widget **"HTML personalizado"**
3. Cole todo o conteúdo do `index.html`
4. **Desative** o header e footer do tema nessa página  
   (no Elementor Pro: Settings → Hide Header / Hide Footer)

---

## O que substituir antes de publicar

### Obrigatório
- [ ] `hero-bg.jpg` → foto real do evento (ideal: 1920×1080px, <200KB comprimido)
- [ ] `SEU_VIDEO_ID` no iframe do Vimeo → ID real do vídeo de apresentação
- [ ] Links dos botões "ENTRAR GRATUITAMENTE" e "GARANTIR ACESSO" → URLs reais de inscrição
- [ ] Links das redes sociais no footer (Instagram, Facebook)
- [ ] Logo SVG placeholder → logo real em SVG ou PNG da Emergency Talks

### Recomendado
- [ ] `og:image` no meta → imagem 1200×630px para compartilhamento social
- [ ] `canonical` URL → confirmar URL final publicada
- [ ] Data no countdown → ajustar se a data mudar (linha `EVENT_DATE` no JS)

### Quando os palestrantes forem revelados
- Substituir os 4 cards de silhueta por fotos reais + nome + especialidade
- Adicionar `hover` com bio resumida (já está previsto no CSS base)

---

## Fonte: Linear Grotesk

A fonte Linear Grotesk **não está no Google Fonts** (é uma fonte paga).  
O código já tem fallback para Inter (gratuita, muito similar).

Se a licença da Linear Grotesk já estiver no servidor:
1. Faça upload dos arquivos `.woff2` para `/wp-content/fonts/`
2. Adicione o `@font-face` no início do bloco `<style>` do HTML:

```css
@font-face {
  font-family: 'Linear Grotesk';
  src: url('/wp-content/fonts/LinearGrotesk-Regular.woff2') format('woff2');
  font-weight: 400;
  font-display: swap;
}
/* repetir para os pesos 100, 700, 900 */
```

---

## Por que não usar o Elementor nesta página?

O Elementor carrega ~400KB de JS + CSS extras que não são usados nessa LP.  
Esta versão em HTML puro carrega **~12KB de CSS + ~3KB de JS** — cerca de 30× mais leve.  
Isso impacta diretamente o Core Web Vitals (LCP, FID, CLS) e o ranqueamento no Google.

---

## SEO já configurado nesta LP

- ✅ Schema.org `Event` (rich snippet: data, modo online, preços)
- ✅ Meta `title` e `description` otimizados
- ✅ Open Graph completo (WhatsApp, Facebook, LinkedIn)
- ✅ `canonical` URL definida
- ✅ HTML semântico: `<header>`, `<main>`, `<section>`, `<article>`, `<footer>`, `<time>`
- ✅ Hierarquia correta de headings (1 único `<h1>` por página)
- ✅ `aria-label` e `aria-expanded` (acessibilidade + Google)
- ✅ `loading="lazy"` no iframe do vídeo
- ✅ `rel="noopener noreferrer"` em todos os links externos

---

Dúvidas: atendimento@grupotalks.com.br · (85) 99830.2705
