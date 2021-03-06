@section('template')
  <div class="p-8 md:p-12 lg:p-15 mt-10 sm:mt-0 w-full flex flex-col items-center" id="pricing">
    <div class="max-w-container">
      <h2 class="mb-12 text-blue-dark font-light text-center">@{{ devise.title.text }}</h2>

      <div class="flex flex-col md:flex-row justify-between align-stretch mb-8">
        <div class="w-full md:w-1/2 md:pr-4 flex">
          <div class="rounded-sm bg-grey-lighter p-8 text-blue-dark w-full" :style="{'background-color': devise.offer1background.color}">
            <h4 class="mb-8 font-light text-center">@{{ devise.offer1title.text }}</h4>
            <div class="text-center text-5xl font-bold mb-8">
              <small class="text-xs align-top mt-4 -mr-3 inline-block">$</small>
              @{{ devise.offer1price.text }}
              <sub class="text-sm align-baseline inline-block -ml-3">/ person</sub>
            </div>
            <p>
              @{{ devise.offer1description.text }}
            </p>
          </div>
        </div>

        <div class="w-full md:w-1/2 md:pl-4 flex">
          <div class="rounded-sm bg-blue-dark text-white p-8 w-full" :style="{'background-color': devise.offer2background.color}">
            <h4 class="mb-8 font-light text-center">@{{ devise.offer2title.text }}</h4>
            <div class="text-center text-5xl font-bold mb-8">
              <small class="text-xs align-top mt-4 -mr-3 inline-block">$</small>
              @{{ devise.offer2price.text }}
              <sub class="text-sm align-baseline inline-block -ml-3">/ person</sub>
            </div>
            <p class="text-white">
              <template v-if="devise.offer2offer2description">
              @{{ devise.offer2offer2description.settings.numberOfWords }}
            </template>
              @{{ devise.offer2description.text }}
            </p>
          </div>
        </div>
      </div>

      <div class="flex justify-between">
        <div class="w-full md:w-1/2 text-center">
          <a :href="devise.offer1link.href" :target="devise.offer1link.target" class="btn">
            @{{ devise.offer1link.text }}
          </a>
        </div>
        <div class="w-1/2 text-center hidden md:block">
          <a :href="devise.offer2link.href" :target="devise.offer2link.target" class="btn">
            @{{ devise.offer2link.text }}
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('component')
  <script>
    let module = {
      config: {
        title: {
          type: 'text',
          label: 'Title',
          maxlength: 120
        },
        offer1background: {
          type: 'color',
          label: 'Offer 1 Color',
        },
        offer1title: {
          type: 'text',
          label: 'Offer 1 Title',
        },
        offer1price: {
          type: 'number',
          label: 'Offer 1 Price',
        },
        offer1description: {
          type: 'textarea',
          label: 'Offer 1 Description',
        },
        offer1link: {
          type: 'link',
          label: 'Offer 1 Link',
        },
        offer2background: {
          type: 'color',
          label: 'Offer 2 Color',
        },
        offer2title: {
          type: 'text',
          label: 'Offer 2 Title',
        },
        offer2price: {
          type: 'number',
          label: 'Offer 2 Price',
        },
        offer2description: {
          type: 'textarea',
          label: 'Offer 2 Description',
        },
        offer2link: {
          type: 'link',
          label: 'Offer 2 Link',
        }
      }
    }
  </script>
@endsection
