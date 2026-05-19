# Summit Talks 2025 — Resumo do Projeto

**Arquivo principal:** `C:\Users\User\Documents\Claude Code\summit-talks\index.html`
**Data do evento:** 20 de junho de 2025 · 08h00 BRT · Online · Gratuito

---

## Melhorias Implementadas

### 1. Hero 2 Colunas (Layout Editorial)
- Coluna esquerda: logo, tag com dot pulsante, CTA principal
- Coluna direita: card com data/hora, badges AO VIVO + GRATUITO, contagem regressiva, meta-lista, rail de palestrantes
- Background: gradientes radiais em CSS puro + grid de pontos — sem dependência de imagem
- Grid: `grid-template-columns: 1.1fr 1fr` com `gap: 64px`
- Card direito: `backdrop-filter: blur(24px)` + borda sutil (efeito glass)

### 2. Ticker Vermelho
- Fundo `var(--red-brand)` com animação `translateX(-50%)` infinita
- 9 temas do Summit como itens separados por `·`
- Duplicação via JS (`innerHTML += innerHTML`) para loop seamless
- Pausa no hover

### 3. Seção de Palestrantes (Grade de Fotos)
- Grid 4 colunas com cards de foto
- `object-fit: cover; object-position: top center`
- Fallback: gradiente escuro quando imagem não está disponível
- Hover: `translateY(-5px)` + borda vermelha sutil

### 4. Sticky CTA Bar
- `position: fixed; top: 0` com `transform: translateY(-100%)` → `.visible { transform: translateY(0) }`
- Ativado via `IntersectionObserver` quando a seção hero sai do viewport
- Exibe: nome do evento + data/hora + contagem regressiva parcial (dias/horas/min) + botão CTA

### 5. Agenda com Color-Coding por Trilha
- Borda esquerda colorida via `data-track` attribute:
  - `clinico` → vermelho (`var(--red-brand)`)
  - `carreira` → laranja (`#e07a3f`)
  - `futuro` → cinza (`#a0a0a0`)
  - `break` → branco translúcido
- Accordion com `max-height: 0 → 360px` + transição CSS
- Badge de trilha colorido por track

### 6. Eyebrow com Linha Vermelha + Shimmer
- `.eyebrow::before`: linha de 24px em `var(--red-brand)` antes do texto
- `.btn-cta::after`: shimmer `linear-gradient` com `translateX(-100% → 100%)` no hover
- Sombra expandida no hover: `box-shadow: 0 16px 48px rgba(211,28,43,.55)`

---

## Correções do Hero

| Item | Status |
|------|--------|
| Destacar 20/06, 8h, AO VIVO, GRATUITO | ✅ |
| Contagem regressiva com timezone correta | ✅ `Date.UTC(2025, 5, 20, 11, 0, 0)` |
| Remover "3ª Edição" | ✅ |
| Remover "Investimento R$ 0,00" | ✅ |
| Remover tagline "A Medicina do Amanhã..." | ✅ |
| Centralizar tag "Summit Talks · 20 de Junho..." | ✅ |
| Centralizar nota "Gratuito · 30 segundos..." | ✅ |

---

## Menu / Navbar

- Links âncora: `#programacao`, `#palestrantes`, `#para-quem`, `#faq`
- Botão CTA vermelho: `Inscrever-se` (vai para `#inscricao`)
- `IntersectionObserver` para destacar link ativo ao rolar
- Logo Emergency Talks: `height: 44px`
- Links âncora ocultados em mobile (`max-width: 960px`)

---

## Limpeza de Texto

- Removidos todos os travessões (`—`) dos textos visíveis
- Removidas todas as instâncias de "Sem cartão de crédito" / "Sem cartão"

---

## Fotos dos Palestrantes

**Pasta:** `summit-talks/assets/images/speakers/`
**Formato:** `.webp` · Lowercase · Sem acentos · Separado por hífen

| # | Palestrante | Arquivo |
|---|-------------|---------|
| 1 | Rafael Munerato | `rafael-munerato.webp` |
| 2 | Hamilton Rocha Júnior | `hamilton-rocha-junior.webp` |
| 3 | Bruna Bianchi | `bruna-bianchi.webp` |
| 4 | Patrícia Lopes | `patricia-lopes.webp` |
| 5 | Cláudio Barreto | `claudio-barreto.webp` |
| 6 | Gustavo Moreira | `gustavo-moreira.webp` |
| 7 | Nicole Pinheiro | `nicole-pinheiro.webp` |
| 8 | Lucas Valente | `lucas-valente.webp` |
| 9 | Ricardo Langer | `ricardo-langer.webp` |
| 10 | Estevam Rivello | `estevam-rivello.webp` |
| 11 | Mariana Zonari | `mariana-zonari.webp` |
| 12 | Daniel Coriolano | `daniel-coriolano.webp` |
| 13 | Camila Lunardi | `camila-lunardi.webp` |
| 14 | Khalil Feitosa | `khalil-feitosa.webp` |
| 15 | José Alencar | `jose-alencar.webp` |
| 16 | Gheysiane | `gheysiane.webp` |
| 17 | Victor Binda | `victor-binda.webp` |
| 18 | César Chalub | `cesar-chalub.webp` |
| 19 | Frederico Arnaud | `frederico-arnaud.webp` |

---

## Detalhes Técnicos

| Recurso | Detalhe |
|---------|---------|
| Arquivo | `index.html` (single-file, CSS + JS inline) |
| Fonte | LinearGrotesk TTF via `@font-face` (6 pesos: 100, 400, 500, 600, 700, 900) |
| Background hero | CSS puro: `radial-gradient` + dot grid — sem imagem |
| Countdown timezone | `Date.UTC(2025, 5, 20, 11, 0, 0)` = 08h00 BRT |
| Ticker loop | Duplicação de `innerHTML` + `translateX(-50%)` |
| Sticky CTA | `IntersectionObserver` na seção `#inicio` |
| Animações | `IntersectionObserver` + classe `.visible` + `fade-up` |
| Acordeão | Função genérica `accordion(itemSel, btnSel, openClass)` |
| Schema.org | JSON-LD `Event` para SEO |

---

## Regras de Design

> **Não usar verde em nenhum lugar da comunicação.**

- Paleta principal: preto `#0c0c0c` + vermelho `#d31c2b` + branco
- Trilhas da agenda: vermelho / laranja / cinza (sem verde)

---

## Status

| Seção | Status |
|-------|--------|
| Hero 2 colunas | ✅ Implementado |
| Ticker vermelho | ✅ Implementado |
| Grade de palestrantes | ✅ Implementado (aguarda fotos) |
| Sticky CTA | ✅ Implementado |
| Agenda com trilhas | ✅ Implementado |
| Eyebrow + shimmer | ✅ Implementado |
| Navbar com âncoras | ✅ Implementado |
| Limpeza de texto | ✅ Concluída |
| Fotos dos palestrantes | ⏳ Aguardando upload na pasta `assets/images/speakers/` |
